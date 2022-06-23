<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StartSellingController extends Controller
{
    public function convert_user_to_seller()
    {
        $user = User::findOrFail(auth()->id());
        if ($user->role != Role::ADMIN || $user->role != Role::SUPERADMIN) {
            $user->role = Role::VENDOR;
            if ($user->save()) {
                toastr()->success('Seller Account Created Successfully.');
            }
        }
        return redirect()->route('partner_overview');
    }
}
