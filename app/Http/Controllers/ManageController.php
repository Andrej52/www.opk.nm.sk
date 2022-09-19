<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ManageController extends Controller
{
    public function show()
    {
        $data[0]=DB::table('topics')->get();
        $data[1]=DB::table('galleries')->get();
        $data[2]=DB::table('events')->get();
        return $data;
    }

    public function check($action)
    {


        if ($action == "add") 
        {
            var_dump("add");
        }        
        else
        {
            if ($action == "edit") 
            {
              var_dump("edit");
            }
            elseif ($action == "delete") {
                var_dump('delete');
            }
        }
        
    }

    public function add()
    {
    }
    public function edit()
    {

    }
    public function delete()
    {
        
    }
}
