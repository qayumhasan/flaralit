<?php

namespace App\Http\Controllers;

use App\Models\HowItWork;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;

class HowItWorkController extends Controller
{
    public function index()
    {
        return view('backend.guideline.how_it_work.index');
    }

    public function create($id)
    {
        $section_id = $id;
        $data = HowItWork::first();
        return view('backend.guideline.how_it_work.edit', compact('section_id', 'data'));
    }
    public function store(Request $request)
    {

        if ($request->section_id == HowItWork::SECTION_ONE) {

            $request->validate([
                'section_one_title'     => 'required|string',
                'section_one_subtitle'  => 'required|string',
                'section_one_top_img'   => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],
                'section_one_image'     => [
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ]
            ]);
            try {
                $section                          = HowItWork::first();
                $section->section_one_title       = $request->section_one_title;
                $section->section_one_subtitle    = $request->section_one_subtitle;

                if ($request->has('section_one_image') && $request->section_one_image != null) {
                    if ($section->section_one_image != null && file_exists('public/' . $section->section_one_image)) {
                        unlink_image($section->section_one_image);
                    }
                    $section->section_one_image = image_upload($request->section_one_image, 'how_it_work');
                }
                if ($request->has('section_one_top_img') && $request->section_one_top_img != null) {
                    if ($section->section_one_top_img != null && file_exists('public/' . $section->section_one_top_img)) {
                        unlink_image($section->section_one_top_img);
                    }
                    $section->section_one_top_img = image_upload($request->section_one_top_img, 'how_it_work');
                }

                $section->save();

                toastr()->success(__('Section One updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }

        if ($request->section_id == HowItWork::SECTION_TWO) {

            $request->validate([
                'section_two_title'     => 'required|string',
                'section_two_details'  => 'required|string',
                'section_two_items_one_title'  => 'required|string',
                'section_two_items_one_description'  => 'required|string',
                'section_two_items_one_image'   => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

                'section_two_items_two_title'  => 'required|string',
                'section_two_items_two_description'  => 'required|string',
                'section_two_items_two_image'   => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

                'section_two_items_three_title'  => 'required|string',
                'section_two_items_three_description'  => 'required|string',
                'section_two_items_three_image'   => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

            ]);
            try {
                $section                          = HowItWork::first();

                $section->section_two_title       = $request->section_two_title;
                $section->section_two_details    = $request->section_two_details;

                $section->section_two_items_one_title    = $request->section_two_items_one_title;
                $section->section_two_items_one_description    = $request->section_two_items_one_description;

                $section->section_two_items_two_title    = $request->section_two_items_two_title;
                $section->section_two_items_two_description    = $request->section_two_items_two_description;

                $section->section_two_items_three_title    = $request->section_two_items_three_title;
                $section->section_two_items_three_description    = $request->section_two_items_three_description;


                if ($request->has('section_two_items_one_image') && $request->section_two_items_one_image != null) {
                    if ($section->section_two_items_one_image != null && file_exists('public/' . $section->section_two_items_one_image)) {
                        unlink_image($section->section_two_items_one_image);
                    }
                    $section->section_two_items_one_image = image_upload($request->section_two_items_one_image, 'how_it_work');
                }

                if ($request->has('section_two_items_two_image') && $request->section_two_items_two_image != null) {
                    if ($section->section_two_items_two_image != null && file_exists('public/' . $section->section_two_items_two_image)) {
                        unlink_image($section->section_two_items_two_image);
                    }
                    $section->section_two_items_two_image = image_upload($request->section_two_items_two_image, 'how_it_work');
                }

                if ($request->has('section_two_items_three_image') && $request->section_two_items_three_image != null) {
                    if ($section->section_two_items_three_image != null && file_exists('public/' . $section->section_two_items_three_image)) {
                        unlink_image($section->section_two_items_three_image);
                    }
                    $section->section_two_items_three_image = image_upload($request->section_two_items_three_image, 'how_it_work');
                }


                $section->save();

                toastr()->success(__('Section Two updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }

        if ($request->section_id == HowItWork::SECTION_THREE) {

            $request->validate([
                'section_three_title'     => 'required|string',
                'section_three_description'  => 'required|string',

                'section_three_image'   => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

                'section_three_items_one_title'  => 'required|string',
                'section_three_items_one_description'  => 'required|string',

                'section_three_items_two_title'  => 'required|string',
                'section_three_items_two_description'  => 'required|string',


                'section_three_items_three_title'  => 'required|string',
                'section_three_items_three_description'  => 'required|string',


            ]);
            try {
                $section                          = HowItWork::first();

                $section->section_three_title       = $request->section_three_title;
                $section->section_three_description    = $request->section_three_description;




                if ($request->has('section_three_image') && $request->section_three_image != null) {
                    if ($section->section_three_image != null && file_exists('public/' . $section->section_three_image)) {
                        unlink_image($section->section_three_image);
                    }
                    $section->section_three_image = image_upload($request->section_three_image, 'how_it_work');
                }

                $section->section_three_content = json_encode($request->except('_token', 'section_id', 'section_three_title', 'section_three_description', 'section_three_image'));



                $section->save();

                toastr()->success(__('Section Three updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }

        if ($request->section_id == HowItWork::SECTION_FOUR) {
            $request->validate([
                'section_four_title'     => 'required|string',

                'section_four_item_title.*'  => 'required|string',
                'section_four_item_description.*'  => 'required|string',


            ]);

            try {
                $section                          = HowItWork::first();

                $section->section_four_title       = $request->section_four_title;
                $store_data = [];
                $data = [];

                if ($section->section_four_content != null) {
                    $previous_image            = decrypt(json_decode($section->section_four_content));
                    // $previous_image = $content['section_four_item_image'];
                }

                foreach ($request->section_four_item_title as $key => $value) {
                    $data['section_four_item_title'] = $request->section_four_item_title[$key];
                    $data['section_four_item_description'] = $request->section_four_item_description[$key];

                    if (isset($request->section_four_item_image[$key]) && $request->section_four_item_image[$key] != null) {


                        if (isset($previous_image[$key]) && $previous_image[$key]['section_four_item_image'] != null && file_exists('public/' . $previous_image[$key]['section_four_item_image'])) {
                            unlink_image($previous_image[$key]['section_four_item_image']);
                        }
                        $data['section_four_item_image'] = image_upload($request->section_four_item_image[$key], 'howitwork');
                    } else {
                        $data['section_four_item_image'] = isset($previous_image[$key]) ? $previous_image[$key]['section_four_item_image'] : '';
                    }

                    array_push($store_data, $data);
                }
                $section->section_four_content = json_encode(encrypt($store_data));


                $section->save();

                toastr()->success(__('Section Four updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == HowItWork::SECTION_FIVE) {

            $request->validate([
                'section_five_title'     => 'required|string',

                'section_five_image'  => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],
                'section_five_description'  => 'required|string',
            ]);

            try {
                $section                          = HowItWork::first();

                $section->section_five_title       = $request->section_five_title;
                $section->section_five_description       = $request->section_five_description;

                if ($request->has('section_five_image') && $request->section_five_image != null) {
                    if ($section->section_five_image != null && file_exists('public/' . $section->section_five_image)) {
                        unlink_image($section->section_five_image);
                    }
                    $section->section_five_image = image_upload($request->section_five_image, 'how_it_work');
                }

                $section->save();

                toastr()->success(__('Section Five updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == HowItWork::SECTION_SIX) {

            $request->validate([
                'section_six_title'     => 'required|string',
                'section_six_feature_title1'     => 'required|string',
                'section_six_feature_title2'     => 'required|string',
                'section_six_feature_title3'     => 'required|string',
                'section_six_feature_note'     => 'required|string',
                'section_six_item_title.*'     => 'required|string',

            ]);
            try {
                $section                          = HowItWork::first();

                $section->section_six_title            = $request->section_six_title;
                $section->section_six_feature_title1   = $request->section_six_feature_title1;
                $section->section_six_feature_title2   = $request->section_six_feature_title2;
                $section->section_six_feature_title3   = $request->section_six_feature_title3;

                $section->section_six_feature_note       = $request->section_six_feature_note;


                $store_data = [];
                $data = [];

                if ($section->section_six_content != null) {
                    $previous_image            = decrypt(json_decode($section->section_six_content));
                }


                foreach ($request->section_six_item_title as $key => $value) {
                    $data['section_six_item_title'] = $request->section_six_item_title[$key];

                    if (isset($request->section_six_item_image[$key]) && $request->section_six_item_image[$key] != null) {

                        if (isset($previous_image[$key]) && $previous_image[$key]['section_six_item_image'] != null && file_exists('public/' . $previous_image[$key]['section_six_item_image'])) {
                            unlink_image($previous_image[$key]['section_six_item_image']);
                        }
                        $data['section_six_item_image'] = image_upload($request->section_six_item_image[$key], 'howitwork');
                    } else {
                        $data['section_six_item_image'] = isset($previous_image[$key]) ? $previous_image[$key]['section_six_item_image'] : '';
                    }

                    array_push($store_data, $data);
                }

                $section->section_six_content = json_encode(encrypt($store_data));


                $section->save();

                toastr()->success(__('Section Six updated successfully'));

                return back();
            } catch (\Exception $exception) {

                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == HowItWork::SECTION_SEVEN) {

            $request->validate([
                'section_seven_name.*'     => 'required|string',
                'section_seven_designation.*'     => 'required|string',
                'section_seven_description.*'     => 'required|string',
            ]);
            try {
                $section                          = HowItWork::first();

                $store_data = [];
                $data = [];

                if ($section->section_seven_content != null) {
                    $previous_image            = decrypt(json_decode($section->section_seven_content));
                }

                foreach ($request->section_seven_name as $key => $value) {

                    $data['section_seven_name'] = $request->section_seven_name[$key];
                    $data['section_seven_designation'] = $request->section_seven_designation[$key];

                    $data['section_seven_description'] = $request->section_seven_description[$key];

                    if (isset($request->section_seven_image[$key]) && $request->section_seven_image[$key] != null) {

                        if (isset($previous_image[$key]) && $previous_image[$key]['section_seven_image'] != null && file_exists('public/' . $previous_image[$key]['section_seven_image'])) {
                            unlink_image($previous_image[$key]['section_seven_image']);
                        }
                        $data['section_seven_image'] = image_upload($request->section_seven_image[$key], 'howitwork');
                    } else {
                        $data['section_seven_image'] = isset($previous_image[$key]) ? $previous_image[$key]['section_seven_image'] : '';
                    }

                    array_push($store_data, $data);
                }

                $section->section_seven_content = json_encode(encrypt($store_data));


                $section->save();

                toastr()->success(__('Section Seven updated successfully'));

                return back();
            } catch (\Exception $exception) {

                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }

        if ($request->section_id == HowItWork::SECTION_EIGHT) {

            $request->validate([
                'section_eight_title'     => 'required|string',
                'section_eight_subtitle'     => 'required|string',
            ]);
            try {
                $section                          = HowItWork::first();

                $section->section_eight_title    = $request->section_eight_title;
                $section->section_eight_subtitle    = $request->section_eight_subtitle;



                $section->save();

                toastr()->success(__('Section Eight updated successfully'));

                return back();
            } catch (\Exception $exception) {

                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
    }
}
