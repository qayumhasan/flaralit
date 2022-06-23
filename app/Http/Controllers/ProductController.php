<?php

namespace App\Http\Controllers;

use App\Jobs\ProductRedemptionCodeCSVProcess;
use App\Models\ProductCategory;
use App\Models\ProductCategoryPivot;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\ProductMeta;
use App\Models\ProductRedemptionCode;
use App\Models\ProductTypePivot;
use App\Models\ProductType;
use App\Models\Role;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::whereHas('seller', function ($query) {
            return $query->where('role', '!=', Role::VENDOR);
        })->latest()->get();

        return view('backend.product.index', $data);
    }

    public function create()
    {
        $data['categories'] = ProductCategory::where('status', true)->get();
        $data['types']      = ProductType::where('status', true)->get();

        return view('backend.product.create', $data);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title'            => 'required | string',
            'email'            => 'sometimes | nullable | email',
            'phone'            => 'sometimes | nullable | string',
            'categories.*'     => 'required | distinct | string | min:1',
            'description'      => 'required | string',
            'freebie'          => 'sometimes | nullable | string',
            'key_features.*'   => 'required | distinct | string | min:1',
            'term_type'        => 'required | string',
            'cover_image'      => ['required', 'image', new ImageTypeValidation(), new ImageSizeValidation()],
            'meta_image'       => [
                'sometimes', 'nullable', 'image', new ImageTypeValidation(), new ImageSizeValidation()
            ],
            'meta_keyword'     => 'sometimes | nullable | string',
            'meta_title'       => 'sometimes | nullable | string',
            'meta_description' => 'sometimes | nullable | string',
        ]);

        DB::beginTransaction();
        try {
            $product                = new Product();
            $product->seller_id     = auth()->id();
            $product->unique_id     = generate_product_unique_id();
            $product->name          = $request->title;
            $product->slug          = generate_slug($request->name);
            $product->website       = $request->has('website') ? $request->website : null;
            $product->support_email = $request->has('email') ? $request->email : null;
            $product->support_phone = $request->has('phone') ? $request->phone : null;
            $product->description   = $request->description;
            if ($request->has('freebie')) {
                if ($request->freebie == 'free') {
                    $product->is_free        = true;
                    $product->price          = 0;
                    $product->discount_price = 0;
                } else {
                    $product->is_free = false;
                }
            } else {
                $product->is_free        = false;
                $product->price          = $request->price;
                $product->discount_price = $request->discount_price;
            }
            $product->cover_image = image_upload($request->cover_image, 'products');
            $product->status      = Product::STATUS_ACCEPTED;
            $product->save();

            $product_detail               = new ProductDetail();
            $product_detail->product_id   = $product->product_id;
            $product_detail->key_features = json_encode($request->key_features);
            $product_detail->term_type    = $request->term_type;
            $product_detail->save();

            $product_meta             = new ProductMeta();
            $product_meta->product_id = $product->product_id;
            if ($request->hasFile('meta_image')) {
                $meta_image = image_upload($request->meta_image, 'product/meta_image');
            } else {
                $meta_image = null;
            }
            $product_meta->meta_image       = $meta_image;
            $product_meta->meta_keyword     = $request->meta_keyword;
            $product_meta->meta_title       = $request->meta_title;
            $product_meta->meta_description = $request->meta_description;
            $product_meta->save();

            foreach ($request->categories as $category) {
     
                $category_products              = new ProductCategoryPivot();
                $category_products->product_id  = $product->product_id;
                $category_products->category_id = $category;
                $category_products->save();
            }

            DB::commit();
            toastr()->success(__('Product successfully created'));

            return redirect()->back();
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit($slug)
    {
        $data['categories']           = ProductCategory::where('status', true)->get();
        $data['types']                = ProductType::where('status', true)->get();
        $data['product']              = Product::with('images', 'types', 'categories', 'detail', 'meta')->where('slug', $slug)->first();
        $data['category_product_ids'] = ProductCategoryPivot::where('product_id', $data['product']->product_id)->pluck('category_id')->toArray();

        return view('backend.product.edit', $data);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title'            => 'required | string',
            'email'            => 'sometimes | nullable | email',
            'phone'            => 'sometimes | nullable | string',
            'categories.*'     => 'required | distinct | string | min:1',
            'description'      => 'required | string',
            'freebie'          => 'sometimes | nullable | string',
            'key_features.*'   => 'required | string | min:1',
            'term_type'        => 'required | string',
            'cover_image'      => [
                'sometimes', 'nullable', 'image', new ImageTypeValidation(), new ImageSizeValidation()
            ],
            'meta_image'       => [
                'sometimes', 'nullable', 'image', new ImageTypeValidation(), new ImageSizeValidation()
            ],
            'meta_keyword'     => 'sometimes | nullable | string',
            'meta_title'       => 'sometimes | nullable | string',
            'meta_description' => 'sometimes | nullable | string',
        ]);

        DB::beginTransaction();
        try {
            $product                = Product::where('slug', $slug)->first();
            $product->name          = $request->title;
            $product->website       = $request->has('website') ? $request->website : null;
            $product->support_email = $request->has('email') ? $request->email : null;
            $product->support_phone = $request->has('phone') ? $request->phone : null;
            $product->description   = $request->description;
            if ($request->has('freebie')) {
                if ($request->freebie == 'free') {
                    $product->is_free        = true;
                    $product->price          = 0;
                    $product->discount_price = 0;
                } else {
                    $product->is_free = false;
                }
            } else {
                $product->is_free        = false;
                $product->price          = $request->price;
                $product->discount_price = $request->discount_price;
            }
            if ($request->hasFile('cover_image')) {
                if ($product->cover_image != null && file_exists('public/' . $product->cover_image)) {
                    unlink_image($product->cover_image);
                }
                $product->cover_image = image_upload($request->cover_image, 'products');
            }
            $product->save();

            $product_detail               = ProductDetail::where('product_id', $product->product_id)->first();
            $product_detail->key_features = json_encode($request->key_features);
            $product_detail->term_type    = $request->term_type;
            $product_detail->save();

            $product_meta = ProductMeta::where('product_id', $product->product_id)->first();
            if ($request->hasFile('meta_image')) {
                if ($product_meta->meta_image != null && file_exists('public/' . $product_meta->meta_image)) {
                    unlink_image($product_meta->meta_image);
                }
                $product_meta->meta_image = image_upload($request->meta_image, 'product/meta_image');
            }

            $product_meta->meta_keyword     = $request->meta_keyword;
            $product_meta->meta_title       = $request->meta_title;
            $product_meta->meta_description = $request->meta_description;
            $product_meta->save();

            ProductCategoryPivot::where('product_id', $product->product_id)->delete();
            foreach ($request->categories as $category) {
                $category_products              = new ProductCategoryPivot();
                $category_products->product_id  = $product->product_id;
                $category_products->category_id = $category;
                $category_products->save();
            }

            DB::commit();
            toastr()->success(__('Product successfully updated'));

            return redirect()->back();
        } catch (\Exception $exception) {
            DB::rollBack();
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function update_gfl_choice(Request $request)
    {
//        return $request->all();

        try {
            $product             = Product::where('slug', $request->product_slug)->first();
            $product->gfl_choice = $request->gfl_choice;
            $product->save();

            $data['msg'] = 'GFL updated successfully';

            return $data;
        } catch (\Exception $exception) {
            Log::error('ProductController#UpdateGFLchoice: ' . $exception->getMessage());
            $data['msg'] = 'Something went wrong';

            return $data;
        }
    }

    public function edit_product_image($product_slug)
    {
        $product = Product::with('images')->where('slug', $product_slug)->first();

        return view('backend.product.product_image_form', compact('product'));
    }

    public function update_product_image(Request $request)
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
            Log::error('ProductController#StoreImageDropzone: ' . $exception->getMessage());
            $data['msg']  = 'Something went wrong';
            $data['code'] = '400';

            return $data;
        }
    }

    public function edit_product_redemption($product_slug)
    {
        $product = Product::with([
            'detail', 'redemption_codes' => function ($query) {
                $query->orderBy('created_at', 'DESC');
            }
        ])->where('slug', $product_slug)->first();

        return view('backend.product.product_redemption_form', compact('product'));
    }

    public function update_product_redemption(Request $request, $product_slug)
    {
        $request->validate([
            'redemption_type'   => 'sometimes | nullable | string',
            'redemption'        => 'sometimes | nullable | string',
            'instructions.*'    => 'sometimes | nullable | string',
            //            'csv'               => 'sometimes | nullable | mimes:csv,txt',
            'downloadable_file' => 'sometimes | nullable | mimes:zip',
        ]);

        DB::beginTransaction();
        try {
            $product                         = Product::where('slug', $product_slug)->first();
            $product_detail                  = ProductDetail::where('product_id', $product->product_id)->first();
            $product_detail->redemption_type = $request->redemption_type;
            if ($request->has('redemption')) {
                $product_detail->redemption_link = $request->redemption_link;
            }

            if ($request->has('csv') && $request->csv != null) {
                $codes       = array_map('str_getcsv', file($request->csv));
                $array_codes = [];
                foreach ($codes as $code) {
                    array_push($array_codes, $code[0]);
                }
                if (count($array_codes) != count(array_unique($array_codes))) {
                    toastr()->error(__('Upload failed. File has duplicate entry.'));

                    return back();
                }
                $product_detail->csv = file_upload($request->csv, 'product/csv');
                ProductRedemptionCodeCSVProcess::dispatch($array_codes, $product->product_id);
            }

            if ($request->has('instructions')) {
                if ($request->instructions == 'empty') {
                    $product_detail->redemption_instruction = null;
                } else {
                    $product_detail->redemption_instruction = json_encode($request->instructions);
                }
            }

            if ($request->hasFile('downloadable_file')) {
                if ($request->file('downloadable_file')->getSize() > 512000) {
                    toastr()->error(__('The maximum file size can be 500MB'));

                    return back();
                }
                if ($product_detail->downloadable_file != null && file_exists('public/' . $product_detail->downloadable_file)) {
                    unlink_image($product->detail->downloadable_file);
                }
                $product_detail->downloadable_file = file_upload($request->downloadable_file, 'product/downloadable');
            }

            $product_detail->save();

            DB::commit();
            toastr()->info(__('Your file is being processed'));

            return back();
        } catch (\Exception $exception) {
            DB::rollBack();
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function store_product_redemption(Request $request, $product_slug)
    {
        try {
            $product = Product::where('slug', $product_slug)->first();

            $product_code = ProductRedemptionCode::where([
                ['product_id', $product->product_id],
                ['code', $request->code]
            ])->first();

            if ($product_code) {
                toastr()->error(__('Redemption code already exists'));

                return back();
            } else {
                $product_redemption_code             = new ProductRedemptionCode();
                $product_redemption_code->product_id = $product->product_id;
                $product_redemption_code->code       = $request->code;
                $product_redemption_code->save();
            }

            toastr()->success(__('Redemption code successfully added'));

            return back();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

    public function delete_product_image(Request $request)
    {
        try {
            $product       = Product::where('unique_id', $request->unique_id)->first();
            $filename      = $request->get('filename');
            $product_image = ProductImage::where([
                ['product_id', $product->product_id],
                ['image', 'storage/product/' . $filename]
            ])->first();

            if ($product_image->delete()) {
                if (file_exists('public/storage/product/' . $filename)) {
                    unlink_image('storage/product/' . $filename);
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

    public function destroy($slug)
    {
        $product = Product::where('slug', $slug)->first();
        try {
            $product->delete();
            toastr()->success('Product deleted successfully');

            return redirect()->back();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error('Something went wrong!');

            return redirect()->back();
        }
    }

    public function accept_seller_product($unique_id)
    {
        try {
            $product         = Product::where('unique_id', $unique_id)->first();
            $product->status = Product::STATUS_ACCEPTED;
            $product->save();

            toastr()->success(__('Product successfully accepted'));

            return back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong'));

            return back();
        }
    }

    public function reject_seller_product($unique_id)
    {
        try {
            $product         = Product::where('unique_id', $unique_id)->first();
            $product->status = Product::STATUS_REJECTED;
            $product->save();

            toastr()->success(__('Product successfully rejected'));

            return back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong'));

            return back();
        }
    }

    public function pending_seller_products()
    {
        $data['products'] = Product::with('seller')->where('status', Product::STATUS_PENDING)->latest()->get();

        return view('backend.seller_product.index', $data);
    }

    public function accepted_seller_products()
    {
        $data['products'] = Product::with('seller')->where('status', Product::STATUS_ACCEPTED)->latest()->get();

        return view('backend.seller_product.index', $data);
    }

    public function rejected_seller_products()
    {
        $data['products'] = Product::with('seller')->where('status', Product::STATUS_REJECTED)->latest()->get();

        return view('backend.seller_product.index', $data);
    }
}
