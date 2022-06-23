<?php

namespace App\Http\Controllers;

use App\Jobs\ProductRedemptionCodeCSVProcess;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryPivot;
use App\Models\ProductDetail;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SellerProductController extends Controller
{
    public function seller_product()
    {
        $products = Product::with('detail', 'redemption_codes')->where('seller_id', auth()->user()->id)->latest()->get();

        return view('frontend.partner_portal.product_list', compact('products'));
    }

    public function code_needed($unique_id)
    {
        $product = Product::with('detail', 'redemption_codes')->where('unique_id', $unique_id)->first();

        return view('frontend.partner_portal.code_needed', compact('product'));
    }

    public function update_code_redemption(Request $request)
    {
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        $request->validate([
            'csv'            => 'required | mimes:csv,txt',
            'redemption_url' => ['required', 'regex:' . $regex],
            'instructions.*' => 'required | string | distinct | min:1',
        ]);

        try {
            $product        = Product::where('unique_id', $request->unique_id)->first();
            $product_detail = ProductDetail::where('product_id', $product->id)->first();

            $product_detail->redemption_link = $request->redemption_url;

            if ($request->has('csv') && $request->csv != null) {
                $codes       = array_map('str_getcsv', file($request->csv));
                $array_codes = [];
                foreach ($codes as $code) {
                    array_push($array_codes, $code[0]);
                }
                if (count($array_codes) != count(array_unique($array_codes))) {
                    toastr()->error('Upload failed. File has duplicate entry.');

                    return back();
                }
                if ($product_detail->csv != null && file_exists('public' . $product_detail->csv)) {
                    unlink_image($product_detail->csv);
                }
                $product_detail->csv = file_upload($request->csv, 'products/csv');
                ProductRedemptionCodeCSVProcess::dispatch($array_codes, $product->id);
            }

            $product_detail->redemption_instruction = json_encode($request->instructions);
            $product_detail->save();

            toastr()->info('Your file is being processed');

            return back();
        } catch (\Exception $exception) {
            Log::error('FrontProductController#Store: ' . $exception->getMessage());
            toastr()->info('Something went wrong!');

            return back();
        }
    }
}
