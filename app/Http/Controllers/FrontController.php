<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Blog;
use App\Models\MembershipPlan;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Role;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;

class FrontController extends Controller
{
    public function home()
    {
        $data['products'] = Product::where('status', Product::STATUS_ACCEPTED)->latest()->get();

        return view('frontend.index', $data);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function browse(Request $request)
    {
        $categories = ProductCategory::latest()->get();
        $products = Product::with('detail')->where('status', Product::STATUS_ACCEPTED);

        if ($request->has('categories')) {
            $selected_categories = $request->categories;
            $products = $products->whereHas('categories', function ($query) use ($selected_categories) {
                $query->whereIn('category_id', $selected_categories);
            });
        }

        if ($request->has('plan_type')) {
            $value = $request->plan_type;
            if ($value == Product::TERM_LIFETIME) {
                $products = $products->whereHas('detail', function ($query) use ($value) {
                    $query->where('term_type', Product::TERM_LIFETIME);
                });
            } elseif ($value == Product::TERM_ANNUAL) {
                $products = $products->whereHas('detail', function ($query) use ($value) {
                    $query->where('term_type', Product::TERM_ANNUAL);
                });
                //TODO need to work on the product plan type
            } elseif ($value == 'freebie') {
                $products = $products;
            } elseif ($value == 'subscription') {
                $products = $products;
            } elseif ($value == 'digital_download') {
                $products = $products->whereHas('detail', function ($query) use ($value) {
                    $query->where('redemption_type', Product::REDEMPTION_TYPE_DOWNLOAD);
                });
            }
        }

        if ($request->has('price_range')) {
            if ($request->price_range == 'free') {
                $products = $products->where('is_free', true);
            } else {
                 if ($request->price_from != null && $request->price != null) {
                     $products = $products->whereBetween('price', [$request->price_from, $request->price_to]);
                 } elseif ($request->price_from != null && $request->price == null) {
                     $products = $products->where('price', '>=', $request->price_from);
                 } elseif ($request->price_from == null && $request->price != null) {
                     $products = $products->where('price', '<=', $request->price_from);
                 }
            }
        }

        if ($request->has('gfl_choice')) {
            if ($request->gfl_choice == '1') {
                $products = $products->where('gfl_choice', true);
            }
        }

        $products = $products->orderBy('created_at', 'DESC')->get();

        return view('frontend.browse', compact('products', 'categories'));
    }

    public function career()
    {
        return view('frontend.career');
    }

    public function meet_the_team()
    {
        return view('frontend.meet_the_team');
    }

    public function plus()
    {
        return view('frontend.plus');
    }
    public function accoutn_overview()
    {
        return view('frontend.account-overview');
    }
    public function accoutn_profile()
    {
        return view('frontend.account-profile');
    }
    public function accoutn_credit()
    {
        return view('frontend.account-credits');
    }
    public function accoutn_email()
    {
        return view('frontend.account-email');
    }
    public function accoutn_products()
    {
        return view('frontend.account-products');
    }

    public function wishlist_product()
    {
        $user_wishlists = User::with(['wishlist_products' => function($query) {
            $query->with('detail');
        }])->findOrFail(\auth()->id());
        $products = $user_wishlists->wishlist_products;

        return view('frontend.wishlist_products', compact('products'));
    }

    public function delete_wishlist_product($wishlist_id)
    {
        try {
            $wishlist = Wishlist::findOrFail($wishlist_id);
            $wishlist->delete();

            toastr()->success(__('Product successfully deleted from wishlist'));

            return back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }
    public function terms()
    {
        return view('frontend.terms');
    }
    public function help()
    {
        return view('frontend.help');
    }
    public function affiliate()
    {
        return view('frontend.affiliate');
    }

    public function product_details($product_slug)
    {
        $data['product'] = Product::with('detail', 'images', 'categories')->where('slug', $product_slug)->first();

        return view('frontend.product-details', $data);
    }

    public function add_to_wishlist($product_slug)
    {
        try {
            $product = Product::where('slug', $product_slug)->first();

            $wishlist = Wishlist::where([
                ['user_id', \auth()->id()],
                ['product_id', $product->product_id]
            ])->first();
            if ($wishlist) {
                toastr()->info('Product is already in wishlist');

                return redirect()->route('product-details', $product_slug);
            } else {
                $wishlist = new Wishlist();
                $wishlist->user_id = \auth()->id();
                $wishlist->product_id = $product->product_id;
                $wishlist->save();
            }

            toastr()->success('Product successfully added to wishlist');

            return redirect()->route('product-details', $product_slug);
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            toastr()->error('Sorry! Something went wrong');

            return redirect()->back();
        }
    }

    public function add_to_cart(Request $request)
    {

        // return $cart = session()->forget('cart');
        try {
            $product = Product::where('slug', $request->slug)->first();

            if (!$product) {
                abort(404);
            }

            $cart = session()->get('cart');

            // if cart is empty then this the first product
            if (!$cart) {

                
                $cart = [
                    $product->product_id => [
                        "product_id"      => $product->product_id,
                        "name"      => $product->name,
                        "quantity"  => $request->quantity,
                        "price"     => ($product->price == null) ? 0 : $product->price,
                        "photo"     => $product->cover_image,
                    ]
                ];
                session()->put('cart', $cart);

                
      

                toastr()->success('Product successfully added to cart');

                return redirect()->route('cart');
            }

                    

            
            if (isset($cart[$product->product_id])) {
                unset($cart[$product->product_id]);
            }
            
            $cart[$product->product_id] = [
                "product_id"      => $product->product_id,
                "name"      => $product->name,
                "quantity"  => $request->quantity,
                "price"     => ($product->price == null) ? 0 : $product->price,
                "photo"     => $product->cover_image,
            ];

            session()->put('cart', $cart);

            toastr()->success('Product successfully added to cart');

            return redirect()->route('cart');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            toastr()->error('Sorry! Something went wrong');

            return redirect()->back();
        }
    }

    public function update_cart_item_quantity(Request $request)
    {
        //        return $request->all();
        try {
            $cart = session()->get('cart');

            if (!$cart) {
                $response['code']    = 404;
                $response['message'] = 'Your cart is empty!';

                return $response;
            }

            $cart[$request->product_id]['quantity'] = $request->final_amount;

            session()->put('cart', $cart);

            $response['code']    = 200;
            $response['message'] = 'Quantity successfully updated';
            $response['content'] = view('frontend._cart_form')->render();

            return $response;
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            $response['code']    = 500;
            $response['message'] = 'Something went wrong!';

            return $response;
        }
    }

    public function delete_cart_item(Request $request)
    {
        try {
            $cart = session()->get('cart');

            if (isset($cart[$request->product_id])) {
                unset($cart[$request->product_id]);
                session()->put('cart', $cart);
            }

            $response['code']    = 200;
            $response['items']   = count($cart);
            $response['message'] = 'Item successfully removed from cart';
            $response['content'] = view('frontend._cart_form')->render();

            return $response;
        } catch (Exception $exception) {
            $response['code']    = 500;
            $response['message'] = 'Something went wrong!';

            return $response;
        }
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        $carts = session()->get('cart');
        return view('frontend.checkout', compact('carts'));
    }


    public function checkout_register(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required'
        ]);
        $user           = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->role     = Role::CUSTOMER;
        $user->password = Hash::make($request->password);
        $user->save();


        event(new Registered($user));

        Auth::login($user);
        return redirect()->back();
    }

    public function checkout_login(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (!Auth::user()->status) {
            Auth::logout();
            toastr()->error(__("Your Account is currently deactivated, Please Contact with Administration"));

            return redirect('login');
        }

        return redirect()->back();
    }


    public function blogs()
    {
        $data['featured_blogs'] = Blog::with('user', 'categories', 'contents')->where([
            ['is_featured', true],
            ['status', true]
        ])->limit(3)->get();

        $data['latest_blogs'] = Blog::with('user', 'categories')->where('status', true)->limit(5)->latest()->get();

        return view('frontend.blogs', $data);
    }

    public function blog_detail($slug)
    {
        $data['blog'] = Blog::with('user', 'categories', 'contents')->where('slug', $slug)->first();

        return view('frontend.blog_detail', $data);
    }

    public function blog_search(Request $request)
    {
        $search = $request->search;
        $blogs = Blog::with('categories')->where('title', 'LIKE', '%' . $search . '%')
            ->orWhereHas('categories', function ($q) use ($search) {
                $q->where('name', 'LIKE', '%' . $search . '%');
            })
            ->get();

        return view('frontend.blog_search_result', compact('blogs', 'search'));
    }


    public function membership_card_add(Request $request)
    {
        

         // return $cart = session()->forget('cart');
         try {
            $product =MembershipPlan::first();;

            if (!$product) {
                abort(404);
            }

            $cart = session()->get('cart');

            // if cart is empty then this the first product
            if (!$cart) {

                
                $cart = [
                    $product->id => [
                        "product_id"      => $product->membership_id,
                        "name"      => $product->title,
                        "quantity"  => 1,
                        "price"     => ($product->price == null) ? 0 : $product->price,
                        "photo"     => ' /sf',
                    ]
                ];
                session()->put('cart', $cart);

                toastr()->success(' Membership Plan added successfully');

                return redirect()->route('cart');
            }

                    

            
            if (isset($cart[$product->membership_id])) {
                unset($cart[$product->membership_id]);
            }
            
            $cart[$product->membership_id] = [
                "product_id"=> $product->membership_id,
                "name"      => $product->title,
                "quantity"  => 1,
                "price"     => ($product->price == null) ? 0 : $product->price,
                "photo"     => '/dddd',
            ];

            session()->put('cart', $cart);

            toastr()->success(' Membership Plan added successfully');

            return redirect()->route('cart');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            toastr()->error('Sorry! Something went wrong');

            return redirect()->back();
        }
        
    }
}
