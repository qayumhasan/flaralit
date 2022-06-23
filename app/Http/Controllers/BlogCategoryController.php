<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $blog_categories = BlogCategory::latest()->get();

        return view('backend.blog.category.index', compact('blog_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string'
        ]);

        try {
            $blog_category       = new BlogCategory();
            $blog_category->name = $request->name;
            $blog_category->slug = generate_slug($request->name);

            if ($request->status == 'on') {
                $blog_category->status = true;
            } else {
                $blog_category->status = false;
            }

            if ($blog_category->save()) {
                toastr()->success(__('New BlogCategory created successfully'));

                return redirect()->route('admin.blog_category.index');
            }
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit($slug)
    {
        $blog_categories = BlogCategory::latest()->get();
        $category        = BlogCategory::where('slug', $slug)->first();

        return view('backend.blog.category.edit', compact('category', 'blog_categories'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required | string'
        ]);

        try {
            $blog_category = BlogCategory::where('slug', $slug)->first();

            $blog_category->name = $request->name;
            if ($request->status == 'on') {
                $blog_category->status = true;
            } else {
                $blog_category->status = false;
            }

            if ($blog_category->save()) {
                toastr()->success('BlogCategory updated successfully');

                return redirect()->route('admin.blog_category.index');
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong!');

            return redirect()->back();
        }
    }

    public function destroy($slug)
    {
        try {
            $blog_category = BlogCategory::where('slug', $slug)->first();
            $blog_category->delete();
            toastr()->success('BlogCategory deleted successfully');

            return redirect()->route('admin.blog_category.index');
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error('Something went wrong!');

            return redirect()->back();
        }
    }
}
