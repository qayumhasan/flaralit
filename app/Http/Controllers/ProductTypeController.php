<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $product_types = ProductType::latest()->get();


        return view('backend.product.type.index', compact('product_types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string'
        ]);

        try {
            $product_type       = new ProductType();
            $product_type->name = $request->name;
            $product_type->slug = generate_slug($request->name);

            if ($request->status == 'on') {
                $product_type->status = true;
            } else {
                $product_type->status = false;
            }

            if ($product_type->save()) {
                toastr()->success(__('New Product ProductType created successfully'));

                return redirect()->route('admin.product_type.index');
            }
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $product_types = ProductType::latest()->get();
        $type = ProductType::find($id);

        return view('backend.product.type.edit', compact('type', 'product_types'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required | string'
        ]);

        try {
            $product_type = ProductType::find($id);

            $product_type->name = $request->name;
            if ($request->status == 'on') {
                $product_type->status = true;
            } else {
                $product_type->status = false;
            }

            if ($product_type->save()) {
                toastr()->success('Product ProductType updated successfully');

                return redirect()->route('admin.product_type.index');
            }
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error('Something went wrong!');

            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $product_type = ProductType::find($id);
        try {
            $product_type->delete();
            toastr()->success('ProductType deleted successfully');

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong!');

            return redirect()->back();
        }
    }
}
