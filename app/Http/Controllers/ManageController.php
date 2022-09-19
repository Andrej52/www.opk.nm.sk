<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ManageController extends Controller
{
   
    public function show()   //method do get all data from  tables below
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
                return view("admin.manage.topic")->with('action',$action);
            }
            elseif ($action == "edit") 
            {
                
                $data =DB::table();
                return view("admin.manage.topic")->with('action',$action);
            }        
    }

    public function add($tablename,Request $data)
    {   
        DB::table($tablename)
        ->updateOrInsert(
            ['email' => 'picard@example.com', 'votes' => 0],
        );
        return view("admin.manage");
        
    }
    public function delete($tablename,$id)
    {
        DB::table($tablename)
        ->where('id','=' , $id)
        ->delete();
        return view("admin.manage");
        exit();
    }
}
