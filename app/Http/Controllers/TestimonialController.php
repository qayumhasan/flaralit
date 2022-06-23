<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $data['testimonials'] = Testimonial::latest()->get();

        return view('backend.testimonial.index', $data);
    }

    public function create()
    {
        return view('backend.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required | string',
            'comment'      => 'required | string',
            'organization' => 'required | string',
            'image'        => [
                'image', 'sometimes', 'nullable',
                new ImageTypeValidation(),
                new ImageSizeValidation(),
                'dimensions:max_width=165,max_height=165',
            ],
        ]);

        try {
            $testimonial               = new Testimonial();
            $testimonial->name         = $request->name;
            $testimonial->comment      = $request->comment;
            $testimonial->organization = $request->organization;
            if ($request->has('image')) {
                $testimonial->image = image_upload($request->image, 'testimonials');
            }
            if ($testimonial->save()) {
                toastr()->success(__('Testimonial successfully added to the list'));
            } else {
                toastr()->error(__('Testimonial Failed to added'));
            }

            return redirect()->route('admin.testimonial.index');
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $data['testimonial'] = Testimonial::findOrFail($id);

        return view('backend.testimonial.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'         => 'required | string',
            'comment'      => 'required | string',
            'organization' => 'required | string',
            'image'        => [
                'image', 'sometimes', 'nullable',
                new ImageTypeValidation(),
                new ImageSizeValidation(),
                'dimensions:min_width=165,min_height=165,max_width=165,max_height=165',
            ],
        ]);

        try {
            $testimonial               = Testimonial::findOrFail($id);
            $testimonial->name         = $request->name;
            $testimonial->comment      = $request->comment;
            $testimonial->organization = $request->organization;
            if ($request->has('image')) {
                if (!empty($testimonial->image) && file_exists($testimonial->image)) {
                    unlink_image($testimonial->image);
                }
                $testimonial->image = image_upload($request->image, 'testimonials');
            }
            $testimonial->save();

            toastr()->success(__('Testimonial information updated successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            if ($testimonial->image != null && file_exists($testimonial->image)) {
                unlink_image($testimonial->image);
            }
            $testimonial->delete();

            toastr()->success(__('Testimonial deleted successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
