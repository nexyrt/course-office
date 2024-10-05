<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function teacher()
    {
        return view('admin.users-teacher');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
