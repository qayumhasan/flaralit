<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transection;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use Stripe;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    // stirpe payment 
    public function handlePost(Request $request)
    {

        $cart = session()->get('cart');
        $total = 0;
        $product_price = 0;
        foreach ($cart as $value) {
            if(!isset($value['membershipItem'])){
                $product_price += $value['price'] * $value['quantity'];
            }
            $total += $value['price'] * $value['quantity'];
        }

        $discount = membership_cart_discount($product_price);

        $totalPrice = $total - $discount;



        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $data = Stripe\Charge::create([
            "amount" => 100 * $totalPrice,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Making test payment."
        ]);

        

        if ($data->status == 'succeeded') {


            
            // clear cart 

            // store data to transaction 
            $transection = new Transection();
            $transection->token = $data->balance_transaction;
            $transection->user_id = auth()->user()->user_id;
            $transection->payment_type = 'strip';
            $transection->amount = $data->amount / 100;
            $transection->save();
           

            $unique_id = Str::random(20);

            foreach ($cart as $single) {
                $pid = $single['product_id'];
                $product = Product::find($pid);
                $order = new Order();
                $order->order_unique_id         = $unique_id;
                $order->product_id              = $single['product_id'];
                $order->product_name            = $single['name'];
                $order->quantity                = $single['quantity'];
                $order->user_id                   = auth()->user()->user_id;
                $order->price           = $single['price'];
                $order->photo           = $single['photo'];
                $order->is_free         = $product->is_free ?? 'null';
                $order->support_email           = $product->support_email ?? 'null';
                $order->term_type           = $product->detail->term_type ?? 'null';
                $order->redemption_type         = $product->detail->redemption_type ?? 'null';
                $order->redemption_link         = $product->detail->redemption_link ?? 'null';
                $order->redemption_instruction          = $product->detail->redemption_instruction ?? 'null';
                $order->downloadable_file           = $product->detail->downloadable_file ?? 'null';
                $order->save();
            }

            $request->session()->forget('cart');
            if($request->session()->has('membership_cart')){
                $request->session()->forget('membership_cart');
            }
            $success = 'Payment Paid Successfully. <br> Your Transaction Token is: ' . $transection->token;
            return view('frontend.success', compact('success'));
        } else {
            $error = 'Payment Faild!';
            return view('frontend.error', compact('error'));
        }
    }

    //stripe payment end here
    // Start paypal payment

    private $gateway;
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_SANDBOX_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SANDBOX_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
        return $this->gateway;
    }

    public function pay(Request $request)
    {
        $cart = session()->get('cart');
        $total = 0;
        $product_price = 0;
        foreach ($cart as $value) {
            if(!isset($value['membershipItem'])){
                $product_price += $value['price'] * $value['quantity'];
            }
            $total += $value['price'] * $value['quantity'];
        }

        $discount = membership_cart_discount($product_price);

        $totalPrice = $total - $discount;
        try {
            $response = $this->gateway->purchase(array(
                'amount' => $totalPrice,
                'currency'  => 'usd',
                'returnUrl' => route('paypal_success'),
                'cancelUrl' => route('paypal_error')
            ))->send();
            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function paypal_success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'  => $request->input('PayerID'),
                'transactionReference'  =>  $request->input('paymentId')
            ));
            $response = $transaction->send();

            // clear cart 

            if ($response->isSuccessful()) {
                $arr = $response->getData();
                // store data to transaction 
                $transec = new Transection();
                $transec->token = $arr['payer']['payer_info']['payer_id'];
                $transec->user_id = auth()->user()->user_id;
                $transec->email = $arr['payer']['payer_info']['email'];
                $transec->payment_type = 'paypal';
                $transec->amount = $arr['transactions'][0]['amount']['total'];
                $transec->save();

                $cart = session()->get('cart');

                $unique_id = Str::random(20);

                foreach ($cart as $single) {
                    $pid = $single['product_id'];
                    $product = Product::find($pid);
                    $order = new Order();
                    $order->order_unique_id         = $unique_id;
                    $order->product_id              = $single['product_id'];
                    $order->product_name            = $single['name'];
                    $order->quantity                = $single['quantity'];
                    $order->price           = $single['price'];
                    $order->photo           = $single['photo'];
                    $order->is_free         = $product->is_free ?? 'null';
                    $order->support_email           = $product->support_email ?? 'null';
                    $order->term_type           = $product->detail->term_type ?? 'null';
                    $order->redemption_type         = $product->detail->redemption_type ?? 'null';
                    $order->redemption_link         = $product->detail->redemption_link ?? 'null';
                    $order->redemption_instruction          = $product->detail->redemption_instruction ?? 'null';
                    $order->downloadable_file           = $product->detail->downloadable_file ?? 'null';
                    $order->save();
                }


                $request->session()->forget('cart');

                $success = 'Payment Paid Successfully. <br> Your Transaction Token is: ' . $transec->token;
                return view('frontend.success', compact('success'));
            } else {
                $error = 'Something Wrong! Try again';
                return view('frontend.error', compact('error'));
            }
        } else {
            $error = 'Payment Declined!';
            return view('frontend.error', compact('error'));
        }
    }
    public function paypal_error()
    {
        $error = 'User Decliend The Payment!';
        return view('frontend.error', compact('error'));
    }


    public function testpayment()
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = \Stripe\Customer::create([
            'email' => auth()->user()->email,
            'name'  => auth()->user()->name
        ]);
        return $customer;
    }
}
