<?php

namespace App\Http\Controllers;

use App\Models\NotificationTemplate;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }
}
