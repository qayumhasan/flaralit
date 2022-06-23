<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogCategoryPivot;
use App\Models\BlogContent;
use App\Models\Role;
use App\Models\User;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::with('user')->latest()->get();

        return view('backend.blog.index', $data);
    }

    public function create()
    {
        $data['categories'] = BlogCategory::where('status', true)->get();
        $data['authors']    = User::where([
            ['role', Role::BLOGGER],
            ['status', true]
        ])->get();

        return view('backend.blog.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'            => 'required | string',
            'introduction'     => 'required | string',
            'author'           => 'required',
            'categories'       => 'required',
            'publish_date'     => 'sometimes | nullable | date',
            'meta_title'       => 'sometimes | nullable | string',
            'meta_keyword'     => 'sometimes | nullable | string',
            'meta_description' => 'sometimes | nullable | string',
            'cover_image'      => [
                'required', 'image',
                new ImageSizeValidation(),
                new ImageTypeValidation()
            ],
        ]);

        DB::beginTransaction();
        try {
            $blog                   = new Blog();
            $blog->title            = $request->title;
            $blog->slug             = generate_slug($request->title);
            $blog->introduction     = $request->introduction;
            $blog->user_id          = $request->author;
            $blog->meta_title       = $request->meta_title;
            $blog->meta_keyword     = $request->meta_keyword;
            $blog->meta_description = $request->meta_description;
            $blog->publish_date     = $request->publish_date == null ? today() : $request->publish_date;

            if ($request->hasFile('cover_image')) {
                $blog->cover_image = image_upload_with_thumbnail($request->cover_image, 'blog', 356, 180);
            }
            if ($request->status == 'on') {
                $blog->status = true;
            } else {
                $blog->status = false;
            }
            if ($request->is_featured == 'on') {
                $blog->is_featured = true;
            } else {
                $blog->is_featured = false;
            }

            $blog->save();

            foreach ($request->categories as $category) {
                $blog_category_pivot              = new BlogCategoryPivot();
                $blog_category_pivot->blog_id     = $blog->id;
                $blog_category_pivot->category_id = $category;
                $blog_category_pivot->save();
            }

            DB::commit();
            toastr()->success(__('New Blog created successfully'));

            return redirect()->route('admin.blog.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit($slug)
    {
        $data['blog']              = Blog::where('slug', $slug)->first();
        $data['blog_category_ids'] = BlogCategoryPivot::where('blog_id', $data['blog']->id)->pluck('category_id')->toArray();
        $data['categories']        = BlogCategory::where('status', true)->get();
        $data['authors']           = User::where([
            ['role', Role::BLOGGER],
            ['status', true]
        ])->get();

        return view('backend.blog.edit', $data);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title'            => 'required | string',
            'introduction'     => 'required | string',
            'author'           => 'required',
            'categories'       => 'required',
            'publish_date'     => 'sometimes | nullable | date',
            'meta_title'       => 'sometimes | nullable | string',
            'meta_keyword'     => 'sometimes | nullable | string',
            'meta_description' => 'sometimes | nullable | string',
            'cover_image'      => [
                'image',
                new ImageSizeValidation(),
                new ImageTypeValidation()
            ],
        ]);

        DB::beginTransaction();
        try {
            $blog                   = Blog::where('slug', $slug)->first();
            $blog->title            = $request->title;
            $blog->introduction     = $request->introduction;
            $blog->user_id          = $request->author;
            $blog->meta_title       = $request->meta_title;
            $blog->meta_keyword     = $request->meta_keyword;
            $blog->meta_description = $request->meta_description;
            $blog->publish_date     = $request->publish_date == null ? today() : $request->publish_date;

            if ($request->has('cover_image')) {
                if ($blog->cover_image != null && file_exists('public/storage/' . $blog->cover_image) && file_exists('public/storage/thumbnail_images/' . $blog->cover_image)) {
                    unlink_image_with_thumbnail($blog->cover_image);
                }
                $blog->cover_image = image_upload_with_thumbnail($request->cover_image, 'blog', 356, 180);
            }

            if ($request->status == 'on') {
                $blog->status = true;
            } else {
                $blog->status = false;
            }
            if ($request->is_featured == 'on') {
                $blog->is_featured = true;
            } else {
                $blog->is_featured = false;
            }
            $blog->save();

            BlogCategoryPivot::where('blog_id', $blog->id)->delete();
            foreach ($request->categories as $category) {
                $blog_category_pivot              = new BlogCategoryPivot();
                $blog_category_pivot->blog_id     = $blog->id;
                $blog_category_pivot->category_id = $category;
                $blog_category_pivot->save();
            }

            DB::commit();
            toastr()->success(__('Blog updated successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            DB::rollBack();
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function destroy($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        try {
            if ($blog->cover_image != null && file_exists('public/' . $blog->cover_image)) {
                unlink_image_with_thumbnail($blog->cover_image);
            }
            $blog->delete();
            toastr()->success('Blog deleted successfully');

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong!');

            return redirect()->back();
        }
    }

    public function manage_content($slug)
    {
        $data['blog'] = Blog::with('contents')->where('slug', $slug)->first();

        return view('backend.blog.manage_content', $data);
    }

    public function store_content(Request $request, $slug)
    {
        if ($request->title == null) {
            alert()->warning('Title cannot be empty');

            return redirect()->back();
        }

        try {
            $blog = Blog::where('slug', $slug)->first();

            $content          = new BlogContent();
            $content->blog_id = $blog->id;
            $content->title   = $request->title;
            $content->save();

            toastr()->success(__('Table of Content successfully created'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit_content($content_id)
    {
        $content = BlogContent::findOrFail($content_id);

        return $content;
    }

    public function update_content(Request $request)
    {
        try {
            $content        = BlogContent::findOrFail($request->content_id);
            $content->title = $request->title;
            $content->save();

            toastr()->success(__('Table of Content successfully updated'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function delete_content($id)
    {
        try {
            $content = BlogContent::findOrFail($id);
            $content->delete();

            toastr()->success(__('Content deleted successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function update_main_content(Request $request, $id)
    {
        try {
            $content          = BlogContent::findOrFail($id);
            $content->content = $request->main_content;
            $content->save();

            toastr()->success(__('Content updated successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
