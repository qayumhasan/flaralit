<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialMediaLoginController extends Controller
{
    public function redirectToGoogle()
    {
        $google = SocialMedia::where('platform', SocialMedia::PLATFORM_GOOGLE)->first();

        if (empty($google)) {
            alert()->warning(__('Service Unavailable at this moment!'));

            return redirect()->back();
        } elseif ($google->credentials == null || $google->status == false) {
            alert()->warning(__('Service Unavailable at this moment!'));

            return redirect()->back();
        }

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleResponse()
    {
        try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('email', $user->email)->first();

            if ($finduser) {
                $finduser->google_id = $user->id;
                $finduser->save();
                Auth::login($finduser);

                return redirect()->route('home');
            } else {
                $newUser            = new User();
                $newUser->name      = $user->name;
                $newUser->email     = $user->email;
                $newUser->google_id = $user->id;
                $newUser->role      = Role::CUSTOMER;
                $newUser->password  = Hash::make('123456');
                $newUser->save();

                Auth::login($newUser);
                toastr()->success(__('Successfully Logged In'));

                return redirect()->home('home');
            }
        } catch (Exception $e) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function redirectToFacebook()
    {
        $facebook = SocialMedia::where('platform', SocialMedia::PLATFORM_FACEBOOK)->first();

        if (empty($facebook)) {
            alert()->warning(__('Service Unavailable at this moment!'));

            return redirect()->back();
        } elseif ($facebook->credentials == null || $facebook->status == false) {
            alert()->warning(__('Service Unavailable at this moment!'));

            return redirect()->back();
        }

        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookResponse()
    {
        try {
            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('email', $user->email)->first();

            if ($finduser) {
                $finduser->facebook_id = $user->id;
                $finduser->save();
                Auth::login($finduser);

                return redirect()->route('home');
            } else {
                $newUser              = new User();
                $newUser->name        = $user->name;
                $newUser->email       = $user->email;
                $newUser->facebook_id = $user->id;
                $newUser->role        = Role::CUSTOMER;
                $newUser->password    = Hash::make('123456');
                $newUser->save();

                Auth::login($newUser);
                toastr()->success(__('Successfully Logged In'));

                return redirect()->home('home');
            }
        } catch (Exception $e) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
