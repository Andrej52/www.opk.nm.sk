<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PageController extends Controller
{
    public function homepage()
    {
        return view('home');
    }

    public function contact()
    { 
        return view('contact');    
    }

    public function gallery()
    { 
        return view('gallery');    
    }

    public function opk_crew()
    { 
        return view('opk_crew');    
    }

    public function oko_spz()
    { 
        return view('oko_spz');    
    }

    public function shooting()
    { 
        return view('shooting');    
    }

    public function kynology()
    { 
        return view('kynology');    
    }
    
    public function statutes()
    { 
        return view('statutes');    
    }

    public function hunt_statutes()
    { 
        return view('hunt_statutes');    
    }

    public function courses()
    { 
        return view('courses');    
    }
    public function shooting_range_Beckov()
    { 
        return view('range-Beckov');    
    }
    public function shooting_range_Lehota()
    { 
        return view('range-Lehota');    
    }
 
/*
    function changeLang($langcode){
    
        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }  
*/


}
