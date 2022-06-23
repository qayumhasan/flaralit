<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::latest()->get();

        return view('backend.product.category.index', compact('product_categories'));
    }

    public function create()
    {
        return view('backend.product.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required | string'
        ]);

        try {
            $product_category       = new ProductCategory();
            $product_category->name = $request->category_name;
            $product_category->slug = generate_slug($request->category_name);

            if ($request->status == 'on') {
                $product_category->status = true;
            } else {
                $product_category->status = false;
            }

            if ($product_category->save()) {
                toastr()->success(__('New Product ProductCategory created successfully'));

                return redirect()->route('admin.product_category.index');
            }
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $product_category = ProductCategory::find($id);

        return view('backend.product.category.edit', compact('product_category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required | string'
        ]);

        try {
            $product_category = ProductCategory::find($id);

            $product_category->name = $request->category_name;
            if ($request->status == 'on') {
                $product_category->status = true;
            } else {
                $product_category->status = false;
            }

            if ($product_category->save()) {
                toastr()->success('Product ProductCategory updated successfully');

                return redirect()->route('admin.product_category.index');
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong!');

            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $product_category = ProductCategory::find($id);
        try {
            $product_category->delete();
            toastr()->success('ProductCategory deleted successfully');

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong!');

            return redirect()->back();
        }
    }
}
