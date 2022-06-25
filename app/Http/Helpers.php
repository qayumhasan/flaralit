<?php

use App\Models\MembershipPlan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

if (!function_exists('static_asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string    $path
     * @param bool|null $secure
     *
     * @return string
     */
    function static_asset($path, $secure = null)
    {
        return app('url')->asset('/' . $path, $secure);
    }
}

if (!function_exists('getBaseURL')) {
    /**
     * Return the BaseURL
     * @return [type] [description]
     */
    function getBaseURL()
    {
        $root = '//' . $_SERVER['HTTP_HOST'];
        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

        return $root;
    }
}

if (!function_exists('getFileBaseURL')) {
    function getFileBaseURL()
    {
        return getBaseURL() . 'public/';
    }
}

if (!function_exists('distanceUnit')) {
    function distanceUnit($distance)
    {
        if ($distance <= 0) {
            return $distance * 1609.34 . ' Meter';
        } else {
            return $distance . ' Mi';
        }
    }
}

if (!function_exists('get_setting')) {
    function get_setting($key, $default = null, $lang = false)
    {
        $settings = Cache::remember('business_settings', 86400, function () {
            // return BusinessSetting::all();
        });

        if ($lang == false) {
            $setting = $settings->where('type', $key)->first();
        } else {
            $setting = $settings->where('type', $key)->where('lang', $lang)->first();
            $setting = !$setting ? $settings->where('type', $key)->first() : $setting;
        }
        return $setting == null ? $default : $setting->value;
    }
}

if (!function_exists('file_upload')) {
    function file_upload($file, $location)
    {
        if ($file) {
            $random2 = Illuminate\Support\Str::random(3);
            $thumbnail_name = $random2 . '-' . $file->getClientOriginalName();

            $file->storeAs('public/' . $location, $thumbnail_name);
            return 'storage/' . $location . '/' . $thumbnail_name;
        }
    }
}

if (!function_exists('image_upload')) {
    function image_upload($req, $location)
    {
        if ($req) {
            $random2 = Illuminate\Support\Str::random(3);
            // $thumbnail_name = $random2 . '.' . $req->extension();
            $thumbnail_name = $random2 . '-' . $req->getClientOriginalName();

            // $thumbnail->move(public_path('images/category'), $thumbnail_name);
            $req->storeAs('public/' . $location, $thumbnail_name);
            return 'storage/' . $location . '/' . $thumbnail_name;
        }
    }
}

if (!function_exists('image_upload_with_thumbnail')) {
    function image_upload_with_thumbnail($image, $location, $height = null, $width = null)
    {
        if ($image) {
            $random2 = Illuminate\Support\Str::random(3);
            $thumbnail_name = $random2 . '-' . $image->getClientOriginalName();

            $image->storeAs('public/' . $location, $thumbnail_name);

            $photo = Image::make($image)
                ->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($image->getClientOriginalExtension(), 100);

            Storage::disk('public')->put('thumbnail_images/' . $location . '/' . $thumbnail_name, $photo);

            return $location . '/' . $thumbnail_name;
        }
    }
}

if (!function_exists('get_thumbnail_image')) {
    function get_thumbnail_image($path)
    {
        if (file_exists('public/storage/thumbnail_images/' . $path)) {
            return static_asset('storage/thumbnail_images/' . $path);
        } else {
            return static_asset('storage/' . $path);
        }
    }
}

if (!function_exists('unlink_image')) {
    function unlink_image($url)
    {
        try {
            unlink(public_path() . '/' . $url);
            Storage::delete($url);
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Wrong Try Again!'));
        }
    }
}

if (!function_exists('unlink_image_with_thumbnail')) {
    function unlink_image_with_thumbnail($url)
    {
        $main_image = 'storage/' . $url;
        $thumbnail_image = 'storage/thumbnail_images/' . $url;

        try {
            unlink(public_path() . '/' . $main_image);
            Storage::delete($main_image);

            unlink(public_path() . '/' . $thumbnail_image);
            Storage::delete($thumbnail_image);
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Wrong Try Again!'));
        }
    }
}

if (!function_exists('get_user_image')) {
    function get_user_image()
    {
        try {
            if (auth()->user()->image != null) {
                return auth()->user()->image;
            } else {
                return 'assets/backend/images/user_avatar.png';
            }
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Wrong Try Again!'));
        }
    }
}

if (!function_exists('get_default_user_image')) {
    function get_default_user_image()
    {
        try {
            return 'assets/backend/images/user_avatar.png';
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Wrong Try Again!'));
        }
    }
}

if (!function_exists('get_item_placeholder_image')) {
    function get_item_placeholder_image()
    {
        try {
            return 'assets/backend/images/item_placeholder.jpg';
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Wrong Try Again!'));
        }
    }
}

if (!function_exists('get_site_logo')) {
    function get_site_logo()
    {
        try {
            $general_settings = \App\Models\GeneralSetting::first();
            if ($general_settings->name != null) {
                return $general_settings->name;
            } else {
                return 'Insta Kater';
            }
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Wrong Try Again!'));
        }
    }
}

if (!function_exists('get_favicon_icon')) {
    function get_favicon_icon()
    {
        try {
            $general_settings = \App\Models\GeneralSetting::first();

            if ($general_settings->favicon_icon != null) {
                return $general_settings->favicon_icon;
            } else {
                return 'assets/backend/favicon.ico';
            }
        } catch (\Throwable $th) {
            alert()->error('Error', __('Favicon Icon not Found!'));
        }
    }
}

if (!function_exists('generate_slug')) {
    function generate_slug($data)
    {
        try {
            return preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $data)) . '-' . Str::random(5);
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Wrong Try Again!'));
        }
    }
}

function get_times($default = '19:00', $interval = '+15 minutes')
{
    $output = '';

    $current = strtotime('00:00');
    $end     = strtotime('23:59');

    while ($current <= $end) {
        $time = date('H:i', $current);
        $sel  = ($time == $default) ? ' selected' : '';

        $output  .= "<option value=\"{$time}\"{$sel}>" . date('h.i A', $current) . '</option>';
        $current = strtotime($interval, $current);
    }

    return $output;
}

if (!function_exists('check_caterer_profile')) {
    function check_caterer_profile_completion()
    {
        try {
            $caterer = \App\Models\Caterer::where('user_id', auth()->user()->id)->first();

            if ($caterer->name == null || $caterer->address == null || $caterer->longitude == null || $caterer->latitude == null || $caterer->cover_photo == null) {
                return redirect()->route('admin.caterer.complete_profile', $caterer->id);
            } else {
                dd('no');
                return redirect()->route('dashboard');
            }
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Went Wrong. Try Again!'));
        }
    }
}

if (!function_exists('get_cart_without_tip')) {
    function get_cart_without_tip()
    {
        try {
            $cart = session()->get('cart');
            if ($cart) {
                unset($cart['tip']);
                unset($cart['phone']);
            }
            return $cart;
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Went Wrong. Try Again!'));
        }
    }
}

function caterer_distance($latitude1, $longitude1, $latitude2, $longitude2, $unit)
{
    $theta    = $longitude1 - $longitude2;
    $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
    $distance = acos($distance);
    $distance = rad2deg($distance);
    $distance = $distance * 60 * 1.1515;
    switch ($unit) {
        case 'miles':
            break;
        case 'kilometers':
            $distance = $distance * 1.609344;
        case 'feets':
            $distance = $distance * 5280;
        case 'meters':
            $distance = $distance * 1609.34;
    }

    return (round($distance, 2));
}

if (!function_exists('get_caterer_status')) {
    function get_caterer_status()
    {
        try {
            $caterer = \App\Models\Caterer::where('user_id', auth()->user()->id)->first();

            return $caterer->status;
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Went Wrong. Try Again!'));
        }
    }
}

if (!function_exists('is_authorized')) {
    function is_authorized($permission_id)
    {
        try {
            if (auth()->user()->role == 1) {
                return true;
            }
            $role_permission = \App\Models\PermissionRole::where([
                ['role_id', auth()->user()->role],
                ['permission_id', $permission_id]
            ])->first();

            if ($role_permission) {
                return true;
            }

            return false;
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Wrong Try Again!'));
        }
    }
}

if (!function_exists('generate_product_unique_id')) {
    function generate_product_unique_id()
    {
        try {
            $unique_id = strtotime(now()) . rand(1000, 9999);

            return $unique_id;
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Went Wrong. Try Again!'));
        }
    }
}

if (!function_exists('generate_membership_unique_id')) {
    
    function generate_membership_unique_id()
    {
        try {
            $unique_id = 'plan_'.strtotime(now()) . rand(1000, 9999);

            return $unique_id;
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Went Wrong. Try Again!'));
        }
    }
}

if (!function_exists('product_incomplete_steps')) {
    function product_incomplete_steps($product_id)
    {
        try {
            $incomplete = array();
            $product = Product::with('detail')->findOrFail($product_id);

            if (!$product->images()->exists()) {
                array_push($incomplete, 'Image');
            }

            if ($product->detail->redemption_type == null) {
                array_push($incomplete, 'Redemption');
            } else {
                if ($product->detail->redemption_type == Product::REDEMPTION_TYPE_CODE) {
                    if (!$product->redemption_codes()->exists()) {
                        array_push($incomplete, 'Redemption Code');
                    }
                } else {
                    if ($product->downloadable_file == null) {
                        array_push($incomplete, 'Downloadable File');
                    }
                }
            }

            return $incomplete;
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Went Wrong. Try Again!'));
        }
    }
}

if (!function_exists('cart_quantity_count')) {
    function cart_quantity_count()
    {
        $cart = session()->get('cart');
        if($cart!=null){
            $total = 0;
            foreach ($cart as $value) {
                $total += $value['quantity'];
            }
            return $total;
        }else{
            return '0';
        }
    }
}



if (!function_exists('is_have_membership_plan')) {
    
    function is_have_membership_plan()
    {
        $membership_cart =session()->get('membership_cart');
        if(session()->has('membership_cart')){
            return true;
        } else {
            return false;
        }
    }
}


if (!function_exists('membership_cart_discount')) {
    
    function membership_cart_discount($total)
    {
        
        $membership_cart =session()->get('membership_cart');
        if(session()->has('membership_cart')){
            $discount = ($total * $membership_cart['discount'])/100;
            return $discount;
        } else if(isset(Auth::user()->membership_plan_id)) {
            
            $membership_cart =Auth::user()->membership_plan;
            
            $discount = ($total * $membership_cart['discount'])/100;
            return $discount;
        }else{
            return 0;
        }
    }
}


