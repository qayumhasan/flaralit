<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Models\HowItWork;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;
use Ramsey\Uuid\Guid\Guid;

class GuideController extends Controller
{
    public function index()
    {
        return view('backend.guideline.guide.index');
    }
    public function create($id)
    {
        $section_id = $id;
        $data = Guide::first();
        return view('backend.guideline.guide.edit', compact('section_id', 'data'));
    }
    public function store(Request $request)
    {

        if ($request->section_id == Guide::SECTION_ONE) {

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
                $section                          = Guide::first();
                $section->section_one_title       = $request->section_one_title;
                $section->section_one_subtitle    = $request->section_one_subtitle;

                if ($request->has('section_one_image') && $request->section_one_image != null) {
                    if ($section->section_one_image != null && file_exists('public/' . $section->section_one_image)) {
                        unlink_image($section->section_one_image);
                    }
                    $section->section_one_image = image_upload($request->section_one_image, 'guide');
                }
                if ($request->has('section_one_top_img') && $request->section_one_top_img != null) {
                    if ($section->section_one_top_img != null && file_exists('public/' . $section->section_one_top_img)) {
                        unlink_image($section->section_one_top_img);
                    }
                    $section->section_one_top_img = image_upload($request->section_one_top_img, 'guide');
                }

                $section->save();

                toastr()->success(__('Section One updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }

        if ($request->section_id == Guide::SECTION_TWO) {

            $request->validate([
                'section_two_title'                 => 'required|string',
                'section_two_details'               => 'required|string',
                'section_two_items_one_title'       => 'required|string',
                'section_two_items_one_description' => 'required|string',
                'section_two_items_one_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

                'section_two_items_two_title'       => 'required|string',
                'section_two_items_two_description' => 'required|string',
                'section_two_items_two_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

                'section_two_items_three_title'     => 'required|string',
                'section_two_items_three_description'  => 'required|string',
                'section_two_items_three_image'     => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

            ]);
            try {
                $section                                        = Guide::first();

                $section->section_two_title                     = $request->section_two_title;
                $section->section_two_details                   = $request->section_two_details;

                $section->section_two_items_one_title           = $request->section_two_items_one_title;
                $section->section_two_items_one_description     = $request->section_two_items_one_description;

                $section->section_two_items_two_title           = $request->section_two_items_two_title;
                $section->section_two_items_two_description     = $request->section_two_items_two_description;

                $section->section_two_items_three_title         = $request->section_two_items_three_title;
                $section->section_two_items_three_description   = $request->section_two_items_three_description;


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

        if ($request->section_id == Guide::SECTION_THREE) {
            $request->validate([
                'section_three_title'     => 'required|string',
                'section_three_pre_title'     => 'required|string',
                'section_three_video_id'     => 'required|string',
                'section_three_description'  => 'required|string',

                'section_three_image'   => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

            ]);
            try {
                $section                          = Guide::first();

                $section->section_three_title       = $request->section_three_title;
                $section->section_three_pre_title       = $request->section_three_pre_title;
                $section->section_three_video_id       = $request->section_three_video_id;
                $section->section_three_description    = $request->section_three_description;




                if ($request->has('section_three_image') && $request->section_three_image != null) {
                    if ($section->section_three_image != null && file_exists('public/' . $section->section_three_image)) {
                        unlink_image($section->section_three_image);
                    }
                    $section->section_three_image = image_upload($request->section_three_image, 'how_it_work');
                }

                $section->save();

                toastr()->success(__('Section Three updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }

        if ($request->section_id == Guide::SECTION_FOUR) {
            $request->validate([
                'section_four_title'     => 'required|string',
                'section_four_pre_title'     => 'required|string',

                'section_four_item_title.*'  => 'required|string',


            ]);

            try {
                $section                          = Guide::first();

                $section->section_four_pre_title       = $request->section_four_pre_title;
                $section->section_four_title       = $request->section_four_title;
                $store_data = [];
                $data = [];



                foreach ($request->section_four_item_title as $key => $value) {
                    $data['section_four_item_title'] = $request->section_four_item_title[$key];

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
        if ($request->section_id == Guide::SECTION_FIVE) {

            $request->validate([
                'section_five_title'     => 'required|string',
                'section_five_pre_title'     => 'required|string',
                'section_five_youtube_id'     => 'required|string',
                'section_five_description'     => 'required|string',

                'section_five_image'  => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],
            ]);

            try {
                $section                          = Guide::first();

                $section->section_five_title       = $request->section_five_title;
                $section->section_five_pre_title       = $request->section_five_pre_title;
                $section->section_five_youtube_id       = $request->section_five_youtube_id;
                $section->section_five_description    = $request->section_five_description;




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
        if ($request->section_id == Guide::SECTION_SIX) {
            $request->validate([
                'section_six_title'                 => 'required|string',
                'section_six_pre_title'               => 'required|string',

                'section_six_items_one_title'       => 'required|string',
                'section_six_items_one_description' => 'required|string',
                'section_six_items_one_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

                'section_six_items_two_title'       => 'required|string',
                'section_six_items_two_description' => 'required|string',
                'section_six_items_two_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

                'section_six_items_three_title'     => 'required|string',
                'section_six_items_three_description'  => 'required|string',
                'section_six_items_three_image'     => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

            ]);
            try {
                $section                                        = Guide::first();

                $section->section_six_title                     = $request->section_six_title;
                $section->section_six_pre_title                   = $request->section_six_pre_title;

                $section->section_six_items_one_title           = $request->section_six_items_one_title;
                $section->section_six_items_one_description     = $request->section_six_items_one_description;

                $section->section_six_items_two_title           = $request->section_six_items_two_title;
                $section->section_six_items_two_description     = $request->section_six_items_two_description;

                $section->section_six_items_three_title         = $request->section_six_items_three_title;
                $section->section_six_items_three_description   = $request->section_six_items_three_description;


                if ($request->has('section_six_items_one_image') && $request->section_six_items_one_image != null) {
                    if ($section->section_six_items_one_image != null && file_exists('public/' . $section->section_six_items_one_image)) {
                        unlink_image($section->section_six_items_one_image);
                    }
                    $section->section_six_items_one_image = image_upload($request->section_six_items_one_image, 'guide');
                }

                if ($request->has('section_six_items_two_image') && $request->section_six_items_two_image != null) {
                    if ($section->section_six_items_two_image != null && file_exists('public/' . $section->section_six_items_two_image)) {
                        unlink_image($section->section_six_items_two_image);
                    }
                    $section->section_six_items_two_image = image_upload($request->section_six_items_two_image, 'guide');
                }

                if ($request->has('section_six_items_three_image') && $request->section_six_items_three_image != null) {
                    if ($section->section_six_items_three_image != null && file_exists('public/' . $section->section_six_items_three_image)) {
                        unlink_image($section->section_six_items_three_image);
                    }
                    $section->section_six_items_three_image = image_upload($request->section_six_items_three_image, 'guide');
                }


                $section->save();

                toastr()->success(__('Section Six updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == Guide::SECTION_SEVEN) {

            $request->validate([
                'section_seven_name'     => 'required|string',
                'section_seven_designation'     => 'required|string',
                'section_seven_description'     => 'required|string',
                'section_seven_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],
            ]);
            try {
                $section     = Guide::first();

                $section->section_seven_name = $request->section_seven_name;
                $section->section_seven_designation = $request->section_seven_designation;
                $section->section_seven_description = $request->section_seven_description;

                if ($request->has('section_seven_image') && $request->section_seven_image != null) {
                    if ($section->section_seven_image != null && file_exists('public/' . $section->section_seven_image)) {
                        unlink_image($section->section_seven_image);
                    }
                    $section->section_seven_image = image_upload($request->section_seven_image, 'guide');
                }


                $section->save();

                toastr()->success(__('Section Seven updated successfully'));

                return back();
            } catch (\Exception $exception) {

                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }

        if ($request->section_id == Guide::SECTION_EIGHT) {

            $request->validate([
                'section_eight_title'                 => 'required|string',
                'section_eight_pre_title'               => 'required|string',
                'section_eight_short'               => 'required|string',

                'section_eight_items_one_title'       => 'required|string',
                'section_eight_items_one_description' => 'required|string',
                'section_eight_items_one_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

                'section_eight_items_two_title'       => 'required|string',
                'section_eight_items_two_description' => 'required|string',
                'section_eight_items_two_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],



            ]);
            try {
                $section                                        = Guide::first();

                $section->section_eight_title                     = $request->section_eight_title;
                $section->section_eight_pre_title                   = $request->section_eight_pre_title;
                $section->section_eight_short                   = $request->section_eight_short;

                $section->section_eight_items_one_title           = $request->section_eight_items_one_title;
                $section->section_eight_items_one_description     = $request->section_eight_items_one_description;

                $section->section_eight_items_two_title           = $request->section_eight_items_two_title;
                $section->section_eight_items_two_description     = $request->section_eight_items_two_description;



                if ($request->has('section_eight_items_one_image') && $request->section_eight_items_one_image != null) {
                    if ($section->section_eight_items_one_image != null && file_exists('public/' . $section->section_eight_items_one_image)) {
                        unlink_image($section->section_eight_items_one_image);
                    }
                    $section->section_eight_items_one_image = image_upload($request->section_eight_items_one_image, 'guide');
                }

                if ($request->has('section_eight_items_two_image') && $request->section_eight_items_two_image != null) {
                    if ($section->section_eight_items_two_image != null && file_exists('public/' . $section->section_eight_items_two_image)) {
                        unlink_image($section->section_eight_items_two_image);
                    }
                    $section->section_eight_items_two_image = image_upload($request->section_eight_items_two_image, 'guide');
                }


                $section->save();

                toastr()->success(__('Section Eight updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == Guide::SECTION_NINE) {

            $request->validate([
                'section_nine_items_img'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],
            ]);
            try {
                $section                                        = Guide::first();

                if ($request->has('section_nine_items_img') && $request->section_nine_items_img != null) {
                    if ($section->section_nine_items_img != null && file_exists('public/' . $section->section_nine_items_img)) {
                        unlink_image($section->section_nine_items_img);
                    }
                    $section->section_nine_items_img = image_upload($request->section_nine_items_img, 'guide');
                }



                $section->save();

                toastr()->success(__('Section Nine updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == Guide::SECTION_TEN) {


            $request->validate([
                'section_ten_title'     => 'required|string',
                'section_ten_youtube_id'     => 'required|string',
                'section_ten_description'     => 'required|string',

                'section_ten_image'  => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],
            ]);

            try {
                $section                          = Guide::first();

                $section->section_ten_title       = $request->section_ten_title;
                $section->section_five_pre_title       = $request->section_five_pre_title;
                $section->section_ten_youtube_id       = $request->section_ten_youtube_id;
                $section->section_ten_description    = $request->section_ten_description;

                if ($request->has('section_ten_image') && $request->section_ten_image != null) {
                    if ($section->section_ten_image != null && file_exists('public/' . $section->section_ten_image)) {
                        unlink_image($section->section_ten_image);
                    }
                    $section->section_ten_image = image_upload($request->section_ten_image, 'guide');
                }

                $section->save();

                toastr()->success(__('Section Ten updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == Guide::SECTION_ELEVEN) {

            $request->validate([
                'section_eleven_title'                  => 'required|string',
                'section_eleven_pre_title'              => 'required|string',
                'section_eleven_description'            => 'required|string',
                'section_eleven_items_one_title'        => 'required|string',
                'section_eleven_items_one_description'  => 'required|string',
                'section_eleven_items_two_title'        => 'required|string',
                'section_eleven_items_two_description'  => 'required|string',
                'section_eleven_items_three_title'      => 'required|string',
                'section_eleven_items_three_description' => 'required|string',
                'section_eleven_items_four_title'       => 'required|string',
                'section_eleven_items_four_description' => 'required|string',

                'section_eight_items_one_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

                'section_eight_items_two_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],



            ]);
            try {
                $section                                            = Guide::first();

                $section->section_eleven_title                      = $request->section_eleven_title;
                $section->section_eleven_pre_title                  = $request->section_eleven_pre_title;
                $section->section_eleven_description                = $request->section_eleven_description;
                $section->section_eleven_items_one_title            = $request->section_eleven_items_one_title;
                $section->section_eleven_items_one_description      = $request->section_eleven_items_one_description;
                $section->section_eleven_items_two_title            = $request->section_eleven_items_two_title;
                $section->section_eleven_items_two_description      = $request->section_eleven_items_two_description;
                $section->section_eleven_items_three_title          = $request->section_eleven_items_three_title;
                $section->section_eleven_items_three_description    = $request->section_eleven_items_three_description;
                $section->section_eleven_items_four_title           = $request->section_eleven_items_four_title;
                $section->section_eleven_items_four_description     = $request->section_eleven_items_four_description;



                if ($request->has('section_eleven_items_one_image') && $request->section_eleven_items_one_image != null) {
                    if ($section->section_eleven_items_one_image != null && file_exists('public/' . $section->section_eleven_items_one_image)) {
                        unlink_image($section->section_eleven_items_one_image);
                    }
                    $section->section_eleven_items_one_image = image_upload($request->section_eleven_items_one_image, 'guide');
                }

                if ($request->has('section_eleven_items_two_image') && $request->section_eleven_items_two_image != null) {
                    if ($section->section_eleven_items_two_image != null && file_exists('public/' . $section->section_eleven_items_two_image)) {
                        unlink_image($section->section_eleven_items_two_image);
                    }
                    $section->section_eleven_items_two_image = image_upload($request->section_eleven_items_two_image, 'guide');
                }

                if ($request->has('section_eleven_items_three_image') && $request->section_eleven_items_three_image != null) {
                    if ($section->section_eleven_items_three_image != null && file_exists('public/' . $section->section_eleven_items_three_image)) {
                        unlink_image($section->section_eleven_items_three_image);
                    }
                    $section->section_eleven_items_three_image = image_upload($request->section_eleven_items_three_image, 'guide');
                }
                if ($request->has('section_eleven_items_four_image') && $request->section_eleven_items_four_image != null) {
                    if ($section->section_eleven_items_four_image != null && file_exists('public/' . $section->section_eleven_items_four_image)) {
                        unlink_image($section->section_eleven_items_four_image);
                    }
                    $section->section_eleven_items_four_image = image_upload($request->section_eleven_items_four_image, 'guide');
                }


                $section->save();

                toastr()->success(__('Section Eleven updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == Guide::SECTION_TWELVE) {

            $request->validate([
                'section_twelve_name'     => 'required|string',
                'section_twelve_designation'     => 'required|string',
                'section_twelve_description'     => 'required|string',
                'section_twelve_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],
            ]);
            try {
                $section     = Guide::first();

                $section->section_twelve_name = $request->section_twelve_name;
                $section->section_twelve_designation = $request->section_twelve_designation;
                $section->section_twelve_description = $request->section_twelve_description;

                if ($request->has('section_twelve_image') && $request->section_twelve_image != null) {
                    if ($section->section_twelve_image != null && file_exists('public/' . $section->section_twelve_image)) {
                        unlink_image($section->section_twelve_image);
                    }
                    $section->section_twelve_image = image_upload($request->section_twelve_image, 'guide');
                }


                $section->save();

                toastr()->success(__('Section Twelve updated successfully'));

                return back();
            } catch (\Exception $exception) {

                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == Guide::SECTION_THIRTEEN) {
            $request->validate([
                'section_thirteen_title'     => 'required|string',
                'section_thirteen_pre_title'     => 'required|string',
                'section_thirteen_description'  => 'required|string',

                'section_thirteen_image'   => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],

            ]);
            try {
                $section                          = Guide::first();

                $section->section_thirteen_title       = $request->section_thirteen_title;
                $section->section_thirteen_pre_title       = $request->section_thirteen_pre_title;
                $section->section_thirteen_description    = $request->section_thirteen_description;




                if ($request->has('section_thirteen_image') && $request->section_thirteen_image != null) {
                    if ($section->section_thirteen_image != null && file_exists('public/' . $section->section_thirteen_image)) {
                        unlink_image($section->section_thirteen_image);
                    }
                    $section->section_thirteen_image = image_upload($request->section_thirteen_image, 'guide');
                }

                $section->save();

                toastr()->success(__('Section Thirteen updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }

        if ($request->section_id == Guide::SECTION_FOURTEEN) {

            $request->validate([
                'section_fourteen_title'                 => 'required|string',
                'section_fourteen_description'                 => 'required|string',
                'section_fourteen_items_one_title'                 => 'required|string',
                'section_fourteen_items_one_description'                 => 'required|string',
                'section_fourteen_items_two_title'                 => 'required|string',
                'section_fourteen_items_two_description'                 => 'required|string',
                'section_fourteen_items_three_title'                 => 'required|string',
                'section_fourteen_items_three_description'                 => 'required|string',


                'section_two_items_one_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],


            ]);
            try {
                $section                                        = Guide::first();

                $section->section_fourteen_title                     = $request->section_fourteen_title;
                $section->section_fourteen_description                     = $request->section_fourteen_description;
                $section->section_fourteen_items_one_title                     = $request->section_fourteen_items_one_title;
                $section->section_fourteen_items_one_description                     = $request->section_fourteen_items_one_description;
                $section->section_fourteen_items_two_title                     = $request->section_fourteen_items_two_title;
                $section->section_fourteen_items_two_description                     = $request->section_fourteen_items_two_description;
                $section->section_fourteen_items_three_title                     = $request->section_fourteen_items_three_title;
                $section->section_fourteen_items_three_description                     = $request->section_fourteen_items_three_description;


                if ($request->has('section_fourteen_items_one_image') && $request->section_fourteen_items_one_image != null) {
                    if ($section->section_fourteen_items_one_image != null && file_exists('public/' . $section->section_fourteen_items_one_image)) {
                        unlink_image($section->section_fourteen_items_one_image);
                    }
                    $section->section_fourteen_items_one_image = image_upload($request->section_fourteen_items_one_image, 'guide');
                }

                if ($request->has('section_fourteen_items_two_image') && $request->section_fourteen_items_two_image != null) {
                    if ($section->section_fourteen_items_two_image != null && file_exists('public/' . $section->section_fourteen_items_two_image)) {
                        unlink_image($section->section_fourteen_items_two_image);
                    }
                    $section->section_fourteen_items_two_image = image_upload($request->section_fourteen_items_two_image, 'guide');
                }

                if ($request->has('section_fourteen_items_three_image') && $request->section_fourteen_items_three_image != null) {
                    if ($section->section_fourteen_items_three_image != null && file_exists('public/' . $section->section_fourteen_items_three_image)) {
                        unlink_image($section->section_fourteen_items_three_image);
                    }
                    $section->section_fourteen_items_three_image = image_upload($request->section_fourteen_items_three_image, 'guide');
                }


                $section->save();

                toastr()->success(__('Section Fourteen updated successfully'));

                return back();
            } catch (\Exception $exception) {
                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == Guide::SECTION_FIFTEEN) {

            $request->validate([
                'section_fifteen_name'     => 'required|string',
                'section_fifteen_designation'     => 'required|string',
                'section_fifteen_description'     => 'required|string',
                'section_fifteen_image'       => [
                    'image', 'sometimes', 'nullable',
                    new ImageSizeValidation(),
                    new ImageTypeValidation(),
                ],
            ]);
            try {
                $section     = Guide::first();

                $section->section_fifteen_name = $request->section_fifteen_name;
                $section->section_fifteen_designation = $request->section_fifteen_designation;
                $section->section_fifteen_description = $request->section_fifteen_description;

                if ($request->has('section_fifteen_image') && $request->section_fifteen_image != null) {
                    if ($section->section_fifteen_image != null && file_exists('public/' . $section->section_fifteen_image)) {
                        unlink_image($section->section_fifteen_image);
                    }
                    $section->section_fifteen_image = image_upload($request->section_fifteen_image, 'guide');
                }


                $section->save();

                toastr()->success(__('Section Fifteen updated successfully'));

                return back();
            } catch (\Exception $exception) {

                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
        if ($request->section_id == Guide::SECTION_SIXTEEN) {

            $request->validate([
                'section_sixteen_title'     => 'required|string',
                'section_sixteen_subtitle'     => 'required|string',
            ]);
            try {
                $section                          = Guide::first();

                $section->section_sixteen_title    = $request->section_sixteen_title;
                $section->section_sixteen_subtitle    = $request->section_sixteen_subtitle;



                $section->save();

                toastr()->success(__('Section Sixteen updated successfully'));

                return back();
            } catch (\Exception $exception) {

                toastr()->error(__($exception->getMessage()));

                return back();
            }
        }
    }
}
