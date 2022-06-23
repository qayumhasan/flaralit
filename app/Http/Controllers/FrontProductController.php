<?php

namespace App\Http\Controllers;

use App\Jobs\ProductRedemptionCodeCSVProcess;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryPivot;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\ProductRedemptionCode;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FrontProductController extends Controller
{
    public function create($unique_id)
    {
        $check_product = Product::where('unique_id', $unique_id)->first();

        if (empty($check_product)) {
            $product            = new Product();
            $product->unique_id = $unique_id;
            $product->seller_id = auth()->id();
            $product->status    = Product::STATUS_DRAFT;
            $product->save();

            $product_detail             = new ProductDetail();
            $product_detail->product_id = $product->product_id;
            $product_detail->save();
        }

        $product = Product::with(['categories', 'detail'])->where('unique_id', $unique_id)->first();

        $categories           = ProductCategory::orderBy('name')->get();
        $product_category_ids = ProductCategoryPivot::where('product_id', $product->product_id)->pluck('category_id')->toArray();

        return view('frontend.partner_portal.add_listing', compact('categories', 'product', 'product_category_ids'));
//        return view('frontend.product.create', compact('categories', 'product', 'product_category_ids'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'sometimes | nullable | string',
            'website'        => 'sometimes | nullable | string',
            'email'          => 'sometimes | nullable | email',
            'phone'          => 'sometimes | nullable | string',
            'cover_image'    => [
                'image', 'sometimes', 'nullable', new ImageSizeValidation(), new ImageTypeValidation(),
                'dimensions:max_width=395,max_height=222'
            ],
            'description'    => 'sometimes | nullable | string',
            'is_free'        => 'sometimes | nullable | string',
            'price'          => 'sometimes | nullable | string',
            'discount_price' => 'sometimes | nullable | string',
            'categories.*'   => 'required | string | distinct | min:1',
            'csv'            => 'sometimes | nullable | mimes:csv,txt',
        ]);

        try {
            $data           = [];
            $product        = Product::where('unique_id', $request->unique_id)->first();
            $product_detail = ProductDetail::where('product_id', $product->id)->first();

            if ($request->has('name')) {
                $product->name = $request->name;
                $product->slug = generate_slug($request->name);

                $data['msg']  = 'Name Updated';
                $data['code'] = '200';
            }

            if ($request->has('website')) {
                $product->website = $request->website;

                $data['msg']  = 'Website information Updated';
                $data['code'] = '200';
            }

            if ($request->has('email')) {
                $product->support_email = $request->email;

                $data['msg']  = 'Support email Updated';
                $data['code'] = '200';
            }

            if ($request->has('phone')) {
                $product->support_phone = $request->phone;

                $data['msg']  = 'Support phone Updated';
                $data['code'] = '200';
            }

            if ($request->hasFile('cover_image')) {
                if ($product->cover_image != null && file_exists('public/' . $product->cover_image)) {
                    unlink_image($product->cover_image);
                }
                $product->cover_image = image_upload($request->cover_image, 'products');

                $data['msg']  = 'Cover photo Updated';
                $data['code'] = '200';
            }

            if ($request->has('description')) {
                $product->description = $request->description;

                $data['msg']  = 'Description Updated';
                $data['code'] = '200';
            }

            if ($request->has('is_free')) {
                if ($request->is_free == 'yes') {
                    $product->is_free        = true;
                    $product->price          = 0;
                    $product->discount_price = 0;
                } else {
                    $product->is_free = false;
                }

                $data['msg']  = 'Product information Updated';
                $data['code'] = '200';
            }

            if ($request->has('price')) {
                $product->price = $request->price;

                $data['msg']  = 'Product price Updated';
                $data['code'] = '200';
            }

            if ($request->has('discount_price')) {
                $product->discount_price = $request->discount_price;

                $data['msg']  = 'Product discount price Updated';
                $data['code'] = '200';
            }

            if ($request->has('categories')) {
                $product->categories()->detach();
                if ($request->categories != null) {
                    foreach ($request->categories as $category_slug) {
                        $category = ProductCategory::where('slug', $category_slug)->first();

                        $product_category_pivot              = new ProductCategoryPivot();
                        $product_category_pivot->product_id  = $product->id;
                        $product_category_pivot->category_id = $category->id;
                        $product_category_pivot->save();
                    }
                }

                $data['msg']  = 'Product category Updated';
                $data['code'] = '200';
            }

            if ($request->has('key_features')) {
                if ($request->key_features == 'empty') {
                    $product_detail->key_features = null;
                } else {
                    $product_detail->key_features = json_encode($request->key_features);
                }

                $data['msg']  = 'Product key features Updated';
                $data['code'] = '200';
            }

            if ($request->has('term_type')) {
                $product_detail->term_type = $request->term_type;

                $data['msg']  = 'Product term type Updated';
                $data['code'] = '200';
            }

            if ($request->has('redemption_type')) {
                $product_detail->redemption_type = $request->redemption_type;

                $data['msg']  = 'Product redemption type Updated';
                $data['code'] = '200';
            }

            if ($request->has('redemption_link')) {
                $product_detail->redemption_link = $request->redemption_link;

                $data['msg']  = 'Product redemption link Updated';
                $data['code'] = '200';
            }

            if ($request->has('csv') && $request->csv != null) {
                $codes       = array_map('str_getcsv', file($request->csv));
                $array_codes = [];
                foreach ($codes as $code) {
                    array_push($array_codes, $code[0]);
                }
                if (count($array_codes) != count(array_unique($array_codes))) {
                    $data['msg']  = 'Upload failed. File has duplicate entry.';
                    $data['code'] = '400';

                    return $data;
                }
                $product_detail->csv = file_upload($request->csv, 'products/csv');
//                $code_chunks = array_chunk($array_codes, 2);
//                $batch = Bus::batch([])->dispatch();
//                foreach ($code_chunks as $code_chunk) {
//                    $batch->add(new ProductRedemptionCodeCSVProcess($code_chunk, $product->id));
//                }
                ProductRedemptionCodeCSVProcess::dispatch($array_codes, $product->product_id);
                $data['msg']  = 'Your file is being processed';
                $data['code'] = '300';

            }

            if ($request->has('redemption_instruction')) {
                if ($request->redemption_instruction == 'empty') {
                    $product_detail->redemption_instruction = null;
                } else {
                    $product_detail->redemption_instruction = json_encode($request->redemption_instruction);
                }

                $data['msg']  = 'Product redemption instruction Updated';
                $data['code'] = '200';
            }

            if ($request->hasFile('downloadable_file')) {
                if ($request->file('downloadable_file')->getSize() > 512000) {
                    $data['msg']  = 'The maximum file size can be 500MB';
                    $data['code'] = '400';

                    return $data;
                }
                if ($product_detail->downloadable_file != null && file_exists('public/' . $product_detail->downloadable_file)) {
                    unlink_image($product->detail->downloadable_file);
                }
                $product_detail->downloadable_file = file_upload($request->downloadable_file, 'products/downloadable');

                $data['msg']  = 'Downloadable file Updated';
                $data['code'] = '200';
            }

            $product->save();
            $product_detail->save();

            return $data;
        } catch (\Exception $exception) {
            Log::error('FrontProductController#Store: ' . $exception->getMessage());
            $data['msg']  = 'Something went wrong!';
            $data['code'] = '400';

            return $data;
        }
    }

    public function store_image_dropzone(Request $request)
    {
        try {
            $image     = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/product', $imageName);
            $product                   = Product::where('unique_id', $request->unique_id)->first();
            $product_image             = new ProductImage();
            $product_image->product_id = $product->product_id;
            $product_image->image      = 'storage/product/' . $imageName;
            $product_image->save();

            $data['msg']  = 'Image successfully uploaded';
            $data['code'] = '200';
            return $data;
        } catch (\Exception $exception) {
            Log::error('FrontProductController#StoreImageDropzone: ' . $exception->getMessage());
            $data['msg']  = 'Something went wrong';
            $data['code'] = '400';

            return $data;
        }
    }

    public function delete_image_dropzone(Request $request)
    {
        try {
            $product       = Product::where('unique_id', $request->unique_id)->first();
            $filename      = $request->get('filename');
            $product_image = ProductImage::where([
                ['product_id', $product->id],
                ['image', 'storage/products/' . $filename]
            ])->first();

            if ($product_image->delete()) {
                if (file_exists('public/storage/products/' . $filename)) {
                    unlink_image('storage/products/' . $filename);
                }
            }

            $data['msg']  = 'Image deleted';
            $data['code'] = '200';
            return $data;
        } catch (\Exception $exception) {
            Log::error('FrontProductController#DeleteImageDropzone: ' . $exception->getMessage());
            $data['msg']  = 'Something went wrong';
            $data['code'] = '400';

            return $data;
        }
    }
}
