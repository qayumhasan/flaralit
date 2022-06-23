<?php

namespace App\Http\Controllers;

use App\Models\Caterer;
use App\Models\User;
use App\Rules\ImageSizeValidation;
use App\Rules\ImageTypeValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::where('id', '!=', 1)->latest()->get();

        return view('backend.users.index', $data);
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required | string',
            'email'    => 'required | email',
            'password' => 'required | confirmed | min:6',
            'role'     => 'required',
            'image'    => [
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:min_width=120,min_height=120,max_width=120,max_height=120',
            ],
        ]);

        DB::beginTransaction();
        try {
            $user           = new User();
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->password = Hash::make($request->password);
            $user->role     = $request->role;
            if ($request->has('image')) {
                $user->image = image_upload($request->image, 'users');
            } else {
                $user->image = 'assets/backend/images/user_avatar.png';
            }
            $user->save();

            DB::commit();
            toastr()->success(__('New User created successfully'));

            return redirect()->route('admin.user.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit(User $user)
    {
        $data['user'] = $user;

        return view('backend.users.edit', $data);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'  => 'required | string',
            'email' => 'required | email',
            'image' => [
                new ImageSizeValidation(),
                new ImageTypeValidation(),
                'dimensions:min_width=120,min_height=120,max_width=120,max_height=120',
            ],
        ]);

        try {
            $user->name  = $request->name;
            $user->email = $request->email;
            if ($request->has('image')) {
                if (!empty($user->image) && file_exists($user->image)) {
                    unlink_image($user->image);
                }
                $user->image = image_upload($request->image, 'users');
            }
            $user->save();

            toastr()->success(__('Your information updated successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function updateStatus($user_id)
    {
        try {
            $user         = User::findOrFail($user_id);
            $user->status = ($user->status == User::STATUS_ACTIVE) ? User::STATUS_INACTIVE : User::STATUS_ACTIVE;
            $user->save();

            toastr()->success(__('User updated successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password'         => 'required | confirmed | min:6',
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            toastr()->error(__('Wrong Current Password!'));

            return redirect()->back();
        }

        try {
            $user           = User::findOrFail(auth()->user()->id);
            $user->password = Hash::make($request->password);
            $user->save();

            toastr()->success(__('Password successfully updated'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function destroy(User $user)
    {
        try {
            if ($user->image != null && file_exists($user->image)) {
                unlink_image($user->image);
            }
            $user->delete();

            toastr()->success(__('User deleted successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
