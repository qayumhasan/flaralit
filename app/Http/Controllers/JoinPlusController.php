<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\MembershipPlan;
use App\Models\PlusSection;
use App\Models\PlusContent;
use App\Models\Product;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JoinPlusController extends Controller
{
    public function banner_section_edit()
    {
        $data['banner_section'] = PlusSection::where('section_id', PlusSection::SECTION_BANNER)->first();
        if (!empty($data['banner_section'])) {
            if ($data['banner_section']->content_type == PlusSection::CONTENT_TYPE_BLOG) {
                $data['contents'] = Blog::latest()->get();
            } elseif ($data['banner_section']->content_type == PlusSection::CONTENT_TYPE_PRODUCT) {
                $data['contents'] = Product::latest()->get();
            }
        }

        return view('backend.join_plus.banner_section.edit', $data);
    }

    public function community_section_edit()
    {
        $data['community_section'] = PlusSection::where('section_id', PlusSection::SECTION_JOIN_COMMUNITY)->first();
        if (!empty($data['community_section'])) {
            if ($data['community_section']->content_type == PlusSection::CONTENT_TYPE_BLOG) {
                $data['contents'] = Blog::latest()->get();
            } elseif ($data['community_section']->content_type == PlusSection::CONTENT_TYPE_PRODUCT) {
                $data['contents'] = Product::latest()->get();
            }
        }

        return view('backend.join_plus.community_section.edit', $data);
    }

    public function favourites_section_edit()
    {
        $data['favourites_section'] = PlusSection::where('section_id', PlusSection::SECTION_FAVOURITES)->first();
        if (!empty($data['favourites_section'])) {
            if ($data['favourites_section']->content_type == PlusSection::CONTENT_TYPE_BLOG) {
                $data['contents'] = Blog::latest()->get();
            } elseif ($data['favourites_section']->content_type == PlusSection::CONTENT_TYPE_PRODUCT) {
                $data['contents'] = Product::latest()->get();
            }
        }

        return view('backend.join_plus.favourites_section.edit', $data);
    }


    public function section_update(Request $request)
    {
        $request->validate([
            'heading'           => 'sometimes | nullable | string',
            'title'             => 'required | string',
            'short_description' => 'required | string',
            'content_type'      => 'required | string',
            'content_id'        => 'required | string',
            'video_link'        => 'sometimes | nullable | string',
            'image'             => [
                'sometimes', 'nullable', 'image', new ImageSizeValidation(), new ImageTypeValidation()
            ],
        ]);

        try {
            $section = PlusSection::where('section_id', $request->section_id)->first();
            if (empty($section)) {
                $section = new PlusSection();
            }
            if ($request->has('video_link')) {
                $media_type = 'video';
                $media_link = $request->video_link;
            } elseif ($request->has('image') && $request->image != null) {
                $media_type = 'image';
                unlink_image($section->media_link);
                $media_link = image_upload($request->image, 'join_plus');
            }
            $section->section_id        = $request->section_id;
            $section->heading           = $request->heading;
            $section->title             = $request->title;
            $section->short_description = $request->short_description;
            $section->content_type      = $request->content_type;
            $section->content_id        = $request->content_id;
            $section->media_type        = isset($media_type) ? $media_type : $section->media_type;
            $section->media_link        = isset($media_link) ? $media_link : $section->media_link;
            $section->save();

            toastr()->success(__(PlusSection::SECTION_LIST[$request->section_id] . ' updated successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function get_content(Request $request)
    {
        try {
            if ($request->content_type == PlusSection::CONTENT_TYPE_BLOG) {
                $data['contents'] = Blog::latest()->get();
            } elseif ($request->content_type == PlusSection::CONTENT_TYPE_PRODUCT) {
                $data['contents'] = Product::latest()->get();
            }

            return $data;
        } catch (\Exception $exception) {
            Log::error('JoinPlus-getContent: ' . $exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }



    public function content_section_index()
    {
        $contents = PlusContent::latest()->get();

        return view('backend.join_plus.content.index', compact('contents'));
    }

    public function content_section_create_choose_layout()
    {
        return view('backend.join_plus.content.choose_layout');
    }

    public function content_section_create(Request $request)
    {
        $data['layout'] = $request->layout;

        return view('backend.join_plus.content.create', $data);
    }

    public function content_section_store(Request $request)
    {
        if ($request->layout == null) {
            alert()->error(__('Invalid layout!'));

            return redirect()->back();
        }

        try {
            if ($request->layout == PlusContent::LAYOUT_ONE_IN_ONE) {
                $request->validate([
                    'short_description' => 'required | string',
                    'title'             => 'required | string',
                    'note'              => 'sometimes | nullable | string',
                    'tags'              => 'sometimes | nullable | string',
                    'image'             => ['required', 'image', new ImageTypeValidation(), new ImageSizeValidation()],
                ]);

                if ($request->hasFile('image')) {
                    $content_image = image_upload($request->image, 'join_plus');
                }
                $data['short_description'] = $request->short_description;
                $data['title']             = $request->title;
                $data['note']              = $request->note;
                $data['tags']              = $request->tags;
                $data['image']             = $content_image;
            } else {
                if (count($request->short_description) != count($request->title) || count($request->short_description) != count($request->image)) {
                    alert()->warning(__('Please fill out all the fields'));

                    return redirect()->back();
                }
                $data = [];
                foreach ($request->short_description as $key => $short_description) {
                    $content['short_description'] = $short_description;
                    $content['title']             = $request->title[$key];
                    $content['image']             = image_upload($request->image[$key], 'join_plus');
                    array_push($data, $content);
                }
            }

            $plus_content          = new PlusContent();
            $plus_content->layout  = $request->layout;
            $plus_content->content = json_encode($data);
            $plus_content->save();

            toastr()->success(__('Content successfully added'));

            return redirect()->route('admin.plus.content_section.index');
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function content_section_edit($id)
    {
        $plus_content = PlusContent::findOrFail($id);

        return view('backend.join_plus.content.edit', compact('plus_content'));
    }

    public function content_section_update(Request $request, $id)
    {
        if ($request->layout == null) {
            alert()->error(__('Invalid layout!'));

            return redirect()->back();
        }

        try {
            $plus_content = PlusContent::findorFail($id);
            $main_content = json_decode($plus_content->content);

            if ($request->layout == PlusContent::LAYOUT_ONE_IN_ONE) {
                $request->validate([
                    'short_description' => 'required | string',
                    'title'             => 'required | string',
                    'tags'              => 'sometimes | nullable | string',
                    'image'             => [
                        'sometimes', 'nullable', 'image', new ImageTypeValidation(), new ImageSizeValidation()
                    ],
                ]);

                if ($request->hasFile('image')) {
                    unlink_image($main_content->image);
                    $content_image = image_upload($request->image, 'join_plus');
                }
                $data['short_description'] = $request->short_description;
                $data['title']             = $request->title;
                $data['tags']              = $request->tags;
                $data['image']             = isset($content_image) ? $content_image : $main_content->image;
            } else {
                if (count($request->short_description) != count($request->title)) {
                    alert()->warning(__('Please fill out all the fields'));

                    return redirect()->back();
                }

                $data = [];
                foreach ($request->short_description as $key => $short_description) {
                    $content['short_description'] = $short_description;
                    $content['title']             = $request->title[$key];
                    if ($request->has('image') && isset($request->image[$key]) && $request->image[$key] != null) {
                        unlink_image($main_content[$key - 1]->image);
                        $content_image = image_upload($request->image[$key], 'join_plus');
                    } else {
                        $content_image = $main_content[$key - 1]->image;
                    }
                    $content['image'] = $content_image;
                    array_push($data, $content);
                }
            }

            $plus_content->layout  = $request->layout;
            $plus_content->content = json_encode($data);
            $plus_content->save();

            toastr()->success(__('Content successfully updated'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }



    public function content_section_destroy($id)
    {
        $content = PlusContent::findOrFail($id);
        try {
            if ($content->delete()) {
                toastr()->success(__('Content successfully Deleted'));
                return redirect()->back();
            } else {
                toastr()->error(__('Content Failed to Delete'));
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }


    public function plan_section_edit()
    {
        $plan = MembershipPlan::first();

        return view('backend.join_plus.membership_plan.edit', compact('plan'));
    }


    public function plan_section_update(Request $request)
    {

        
        $request->validate([
            'title'=>'required |min:2|max:255',
            'price'=>'required|numeric',
            'discount'=>'required|numeric|between:0,99.99',
            'cashback'=>'required|numeric|between:0,99.99'
        ]);

        $data = [
            'title' => $request->title,
            'membership_id' => generate_membership_unique_id(),
            'price' => $request->price,
            'discount' => $request->discount,
            'cashback' => $request->cashback,
        ];

        $plan = MembershipPlan::first();
        if($plan){
            MembershipPlan::where('id',$plan->id)->update($data);
        }else{
            MembershipPlan::create($data);
        }
        toastr()->success(__('New Membership Plan Updated successfully'));

        return redirect()->back();



    }
}
