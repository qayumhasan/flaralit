<?php

namespace App\Http\Controllers;

use App\Models\CopyGuideline;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CopyGuidelineController extends Controller
{
    public function index()
    {
        return view('backend.guideline.copy.index');
    }

    public function create(Request $request)
    {
        $section_id = $request->section_id;
        $data       = CopyGuideline::where('section_id', $request->section_id)->first();

        if (empty($data)) {
            toastr()->error(__('Please seed your database first'));

            return back();
        }

        return view('backend.guideline.copy.edit', compact('section_id', 'data'));
    }

    public function update_banner_section(Request $request)
    {
        $request->validate([
            'main_header'       => 'required | string',
            'title'             => 'required | string',
            'short_description' => 'required | string',
            'note'              => 'sometimes | nullable | string',
            'header_image'      => [
                'image', 'sometimes', 'nullable',
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:max_width=300,max_height=22',
            ],
            'section_image'     => [
                'image', 'sometimes', 'nullable',
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:max_width=560,max_height=385',
            ]
        ]);
        try {
            $banner_section                    = CopyGuideline::where('section_id', CopyGuideline::SECTION_BANNER)->first();
            $banner_section->main_header       = $request->main_header;
            $banner_section->title             = $request->title;
            $banner_section->short_description = $request->short_description;
            $banner_section->section_note      = $request->note;
            if ($request->has('header_image') && $request->header_image != null) {
                if ($banner_section->header_image != null && file_exists('public/' . $banner_section->header_image)) {
                    unlink_image($banner_section->header_image);
                }
                $banner_section->header_image = image_upload($request->header_image, 'copy_guideline');
            }

            if ($request->has('section_image') && $request->section_image != null) {
                if ($banner_section->section_image != null && file_exists('public/' . $banner_section->section_image)) {
                    unlink_image($banner_section->section_image);
                }
                $banner_section->section_image = image_upload($request->section_image, 'copy_guideline');
            }
            $banner_section->save();

            toastr()->success(__('Banner section updated successfully'));

            return back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

    public function update_get_started_section(Request $request)
    {
        $request->validate([
            'short_description' => 'required | string',
            'title'             => 'required | string',
            'section_image'     => [
                'image', 'sometimes', 'nullable',
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:max_width=250,max_height=150',
            ],
            'section_image_2'   => [
                'image', 'sometimes', 'nullable',
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:max_width=250,max_height=150',
            ],
            'section_image_3'   => [
                'image', 'sometimes', 'nullable',
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:max_width=250,max_height=150',
            ],
            'section_image_4'   => [
                'image', 'sometimes', 'nullable',
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:max_width=250,max_height=150',
            ],
        ]);

        try {
            $get_started                    = CopyGuideline::where('section_id', CopyGuideline::SECTION_GET_STARTED)->first();
            $get_started->title             = $request->title;
            $get_started->short_description = $request->short_description;

            if ($request->has('section_image') && $request->section_image != null) {
                if ($get_started->section_image != null && file_exists('public/' . $get_started->section_image)) {
                    unlink_image($get_started->section_image);
                }
                $get_started->section_image = image_upload($request->section_image, 'copy_guideline');
            }
            if ($request->has('section_image_2') && $request->section_image_2 != null) {
                if ($get_started->section_image_2 != null && file_exists('public/' . $get_started->section_image_2)) {
                    unlink_image($get_started->section_image_2);
                }
                $get_started->section_image_2 = image_upload($request->section_image_2, 'copy_guideline');
            }
            if ($request->has('section_image_3') && $request->section_image_3 != null) {
                if ($get_started->section_image_3 != null && file_exists('public/' . $get_started->section_image_3)) {
                    unlink_image($get_started->section_image_3);
                }
                $get_started->section_image_3 = image_upload($request->section_image_3, 'copy_guideline');
            }
            if ($request->has('section_image_4') && $request->section_image_4 != null) {
                if ($get_started->section_image_4 != null && file_exists('public/' . $get_started->section_image_4)) {
                    unlink_image($get_started->section_image_4);
                }
                $get_started->section_image_4 = image_upload($request->section_image_4, 'copy_guideline');
            }
            $get_started->save();

            toastr()->success(__('Get Started section updated successfully'));

            return back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

    public function update_basic_section(Request $request)
    {
        $request->validate([
            'title'         => 'required | string',
            'note'          => 'sometimes | nullable | string',
            'contents.*'    => 'required | string | distinct',
            'section_image' => [
                'image', 'sometimes', 'nullable',
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:max_width=415,max_height=375',
            ],
        ]);

        try {
            $basic_section               = CopyGuideline::where('section_id', CopyGuideline::SECTION_BASIC)->first();
            $basic_section->title        = $request->title;
            $basic_section->section_note = $request->note;
            $basic_section->content      = json_encode(encrypt($request->contents));

            if ($request->has('section_image') && $request->section_image != null) {
                if ($basic_section->section_image != null && file_exists('public/' . $basic_section->section_image)) {
                    unlink_image($basic_section->section_image);
                }
                $basic_section->section_image = image_upload($request->section_image, 'copy_guideline');
            }
            $basic_section->save();

            toastr()->success(__('Basic section updated successfully'));

            return back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

    public function update_content_section(Request $request)
    {
        try {
            $instruction_array = [];
            $guideline_array   = [];
            $content_section   = CopyGuideline::where('section_id', CopyGuideline::SECTION_CONTENT)->first();
            if ($content_section->content != null) {
                $content            = decrypt(json_decode($content_section->content));
                $previous_guideline = $content['guideline'];
            }

            foreach ($request->instruction_subjects as $key => $instruction_subject) {
                if ($instruction_subject == null || $request->instructions[$key] == null) {
                    toastr()->error('Instruction subject or Instruction cannot be empty!');

                    return back()->withInput();
                }
                $array ['subject']     = $instruction_subject;
                $array ['instruction'] = $request->instructions[$key];

                array_push($instruction_array, $array);
            }

            foreach ($request->titles as $key => $title) {
                if ($title == null || $request->guidelines[$key] == null) {
                    toastr()->error('Guideline title or Guideline cannot be empty');

                    return back()->withInput();
                }
                $second_array ['title']     = $title;
                $second_array ['note']      = $request->notes[$key];
                $second_array ['guideline'] = $request->guidelines[$key];
                if (isset($request->guideline_images[$key]) && $request->guideline_images[$key] != null) {
                    if (isset($previous_guideline[$key]) && $previous_guideline[$key]['guideline_image'] != null && file_exists('public/' . $previous_guideline[$key]['guideline_image'])) {
                        unlink_image($previous_guideline[$key]['guideline_image']);
                    }
                    $second_array ['guideline_image'] = image_upload($request->guideline_images[$key], 'copy_guideline');
                } else {
                    $second_array ['guideline_image'] = isset($previous_guideline[$key]) ? $previous_guideline[$key]['guideline_image'] : '';
                }

                array_push($guideline_array, $second_array);
            }

            $data['instruction'] = $instruction_array;
            $data['guideline']   = $guideline_array;

            $content_section->content = json_encode(encrypt($data));
            $content_section->save();

            toastr()->success(__('Basic section updated successfully'));

            return back();
        } catch (\Exception $exception) {
            Log::error('CopyGuideline@update_content' . $exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

    public function update_example_section(Request $request)
    {
        try {
            $example         = [];
            $example_section = CopyGuideline::where('section_id', CopyGuideline::SECTION_EXAMPLE)->first();
            foreach ($request->headings as $key => $example_headings) {
                $array = [];
                foreach ($example_headings as $key2 => $heading) {
                    if ($heading == null || $request->descriptions[$key][$key2] == null) {
                        toastr()->error('No fields can be Empty!');

                        return back()->withInput();
                    }
                    $subarray['heading']     = $heading;
                    $subarray['description'] = $request->descriptions[$key][$key2];
                    array_push($array, $subarray);
                }
                array_push($example, $array);
            }
            $example_section->content = json_encode(encrypt($example));
            $example_section->save();

            toastr()->success(__('Example section updated successfully'));

            return back();
        } catch (\Exception $exception) {
            Log::error('CopyGuideline@update_example' . $exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

}
