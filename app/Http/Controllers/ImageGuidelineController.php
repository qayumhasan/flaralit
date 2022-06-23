<?php

namespace App\Http\Controllers;

use App\Models\ImageGuideline;
use App\Models\ImageGuidelineInstruction;
use App\Models\Product;
use App\Models\User;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageGuidelineController extends Controller
{
    public function index()
    {
        return view('backend.guideline.image.index');
    }

    public function create(Request $request)
    {
        $section_id = $request->section_id;
        if ($request->section_id == ImageGuideline::SECTION_INSTRUCTION) {
            $instructions = ImageGuidelineInstruction::latest()->get();

            return view('backend.guideline.image.edit', compact('instructions', 'section_id'));
        } else {
            $products = Product::latest()->get();
            $data     = ImageGuideline::where('section_id', $request->section_id)->first();

            if (empty($data)) {
                toastr()->error(__('Please seed your database first'));

                return back();
            }

            return view('backend.guideline.image.edit', compact('section_id', 'data', 'products'));
        }
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
                'dimensions:min_width=300,min_height=22,max_width=300,max_height=22',
            ],
            'section_image'     => [
                'image', 'sometimes', 'nullable',
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:max_width=560,max_height=385',
            ]
        ]);
        try {
            $banner_section                    = ImageGuideline::where('section_id', ImageGuideline::SECTION_BANNER)->first();
            $banner_section->main_header       = $request->main_header;
            $banner_section->title             = $request->title;
            $banner_section->short_description = $request->short_description;
            $banner_section->section_note      = $request->note;
            if ($request->has('header_image') && $request->header_image != null) {
                if ($banner_section->header_image != null && file_exists('public/' . $banner_section->header_image)) {
                    unlink_image($banner_section->header_image);
                }
                $banner_section->header_image = image_upload($request->header_image, 'image_guideline');
            }

            if ($request->has('section_image') && $request->section_image != null) {
                if ($banner_section->section_image != null && file_exists('public/' . $banner_section->section_image)) {
                    unlink_image($banner_section->section_image);
                }
                $banner_section->section_image = image_upload($request->section_image, 'image_guideline');
            }
            $banner_section->save();

            toastr()->success(__('Banner section updated successfully'));

            return back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

    public function update_requirement_section(Request $request)
    {
        try {
            $content_array       = [];
            $requirement_section = ImageGuideline::where('section_id', ImageGuideline::SECTION_REQUIREMENT)->first();
            if ($requirement_section->content != null) {
                $previous_requirement = decrypt(json_decode($requirement_section->content));
            }

            foreach ($request->titles as $key => $title) {
                if ($title == null || $request->short_descriptions[$key] == null) {
                    toastr()->error('Requirement title or Description cannot be empty');

                    return back()->withInput();
                }
                $array ['title']             = $title;
                $array ['product_id']        = $request->products[$key];
                $array ['short_description'] = $request->short_descriptions[$key];
                if (isset($request->icon_images[$key]) && $request->icon_images[$key] != null) {
                    if (isset($previous_requirement[$key]) && $previous_requirement[$key]['icon_image'] != null && file_exists('public/' . $previous_requirement[$key]['icon_image'])) {
                        unlink_image($previous_requirement[$key]['icon_image']);
                    }
                    $array ['icon_image'] = image_upload($request->icon_images[$key], 'image_guideline');
                } else {
                    $array ['icon_image'] = isset($previous_requirement[$key]) ? $previous_requirement[$key]['icon_image'] : '';
                }

                array_push($content_array, $array);
            }

            $requirement_section->content = json_encode(encrypt($content_array));
            $requirement_section->save();

            toastr()->success(__('Requirement section updated successfully'));

            return back();
        } catch (\Exception $exception) {
            Log::error('ImageGuideline@update_requirement_section' . $exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

    public function update_advertisement_section(Request $request)
    {
        $request->validate([
            'title'             => 'required | string',
            'short_description' => 'required | string',
            'section_image'     => [
                'image', 'sometimes', 'nullable',
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:max_width=260,max_height=220',
            ]
        ]);
        try {
            $advertisement_section                    = ImageGuideline::where('section_id', ImageGuideline::SECTION_ADVERTISEMENT)->first();
            $advertisement_section->title             = $request->title;
            $advertisement_section->short_description = $request->short_description;

            if ($request->has('section_image') && $request->section_image != null) {
                if ($advertisement_section->section_image != null && file_exists('public/' . $advertisement_section->section_image)) {
                    unlink_image($advertisement_section->section_image);
                }
                $advertisement_section->section_image = image_upload($request->section_image, 'image_guideline');
            }
            $advertisement_section->save();

            toastr()->success(__('Advertisement section updated successfully'));

            return back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

    public function create_instruction()
    {
        return view('backend.guideline.image.instruction.create');
    }

    public function store_instruction(Request $request)
    {
//        dd($request->all());

        $request->validate([
            'heading'          => 'required | string',
            'image_layout'     => 'required | string',
            'instruction_type' => 'required | string',
            'description'      => 'required | string',
            'images.*'         => [
                'image', 'required', new ImageSizeValidation(), new ImageTypeValidation(),
            ],
        ]);

        try {
            $instruction                   = new ImageGuidelineInstruction();
            $instruction->instruction_type = $request->instruction_type;
            $instruction->heading          = $request->heading;
            $instruction->description      = $request->description;
            $instruction->image_layout_id  = $request->image_layout;

            $image_array = [];
            if (isset($request->images) && $request->images != null) {
                foreach ($request->images as $key => $image) {
                    if ($image == null) {
                        toastr()->error('No image fields can be Empty!');

                        return back()->withInput();
                    }

                    $array['image'] = image_upload($image, 'image_guideline/instruction_section');
                    $array['caption'] = $request->captions[$key];

                    array_push($image_array, $array);
                }
            }
            $instruction->images = json_encode(encrypt($image_array));
            $instruction->save();

            toastr()->success(__('Instruction inserted successfully'));

            return redirect()->route('admin.guideline.image.create', ['section_id'=>ImageGuideline::SECTION_INSTRUCTION]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            Log::error('ImageGuideline@store_instruction' . $exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

    public function edit_instruction ($instruction_id)
    {

    }

    public function update_instruction (Request $request, $instruction_id)
    {

    }

    public function delete_instruction ($instruction_id)
    {
        try {
            $instruction = ImageGuidelineInstruction::findOrFail($instruction_id);
            if ($instruction->images != null) {
                $images = decrypt(json_decode($instruction->images));
                foreach ($images as $image) {
                    if (file_exists('public/' . $image['image'])) {
                        unlink_image($image['image']);
                    }
                }
            }
            $instruction->delete();

            toastr()->success(__('Instruction deleted successfully'));

            return back();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function update_do_section(Request $request)
    {
        try {
            $do         = [];
            $do_section = ImageGuideline::where('section_id', ImageGuideline::SECTION_INSTRUCTION)->first();
            if ($do_section->content != null) {
                $previous_do_content = decrypt(json_decode($do_section->content));
            }
            foreach ($request->headings as $key => $heading) {
                if ($heading == null || $request->descriptions[$key] == null) {
                    toastr()->error('No fields can be Empty!');

                    return back()->withInput();
                }
                $array                = [];
                $array['heading']     = $heading;
                $array['description'] = $request->descriptions[$key];
                $array['layout']      = $request->image_layout[$key];
                $image_array          = [];
                if (isset($request->images[$key]) && $request->images[$key] != null) {
                    foreach ($request->images[$key] as $key2 => $image) {
                        if ($image == null) {
                            toastr()->error('No image fields can be Empty!');

                            return back()->withInput();
                        }

                        if (isset($request->images[$key][$key2]) && $request->images[$key][$key2] != null) {
                            if (isset($previous_do_content[$key]['images'][$key2]) && $previous_do_content[$key]['images'][$key2] != null && file_exists('public/' . $previous_do_content[$key]['images'][$key2])) {
                                unlink_image($previous_do_content[$key]['images'][$key2]);
                            }
                            $subarray['image'] = image_upload($image, 'image_guideline/do_section');
                        } else {
                            $subarray['image'] = isset($previous_do_content[$key][$key2]) ? $previous_do_content[$key][$key2]['image'] : '';
                        }
                        $subarray['caption'] = $request->captions[$key][$key2];
                        array_push($image_array, $subarray);
                    }
                } else {
                    if (isset($previous_do_content[$key]['images']) && $previous_do_content[$key]['images'] != null) {
                        $image_array = $previous_do_content[$key]['images'];
                    }
                }
                $array['images'] = $image_array;
                array_push($do, $array);
            }
            dd($do);
            $do_section->content = json_encode(encrypt($do));
            $do_section->save();

            toastr()->success(__('Do section updated successfully'));

            return back();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            Log::error('ImageGuideline@update_do_section' . $exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return back();
        }
    }

}
