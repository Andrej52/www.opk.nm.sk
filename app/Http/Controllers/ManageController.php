<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function galleries(){ return view('manage.galleries');    }
    public function events(){ return view('manage.events');    }
    public function topics(){ return view('manage.topics');    }
}
