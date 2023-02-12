<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){ return view('gallery.galleries');    }
    public function gallery_content(){ return view('gallery.content');}

}