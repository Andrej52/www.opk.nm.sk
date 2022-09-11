<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function manage()
    {
        return view('admin.management');
    }
    public function gallery()
    {
        return view('admin.manage.gallery');
    }
    public function topic()
    {
        return view('admin.manage.topic');
    }
    public function event()
    {
        return view('admin.manage.event');
    }
}
