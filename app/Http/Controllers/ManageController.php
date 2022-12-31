<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema; 
class ManageController extends Controller
{
    
    public function show()   //method do get all data from  tables below
    {
        $data[0]=DB::table('topics')->get();
        $data[1]=DB::table('galleries')->get();
        $data[2]=DB::table('events')->get();
        return $data;
    }

    public function check($typename,$action) //method is checking the action of chosen  type of datas
    {
            if ($action == "add") 
            {
                return view("admin.manage.".$typename."")->with('action',$action);
            }
            elseif ($action == "edit") 
            {
                $url = url()->current();
                dd($url);
                $id = substr($url, strrpos($url, '/') + 1);
                $data =DB::table($typename)
                ->where('id' == $id)
                ->get();                
                $responseData= [$action => 'action',$data =>'data'];
                return view("admin.manage.".$typename."")->with('responseData',$responseData);
            }        
    }

    public function add(Request $request) // method used to add data or update them in the  table
    {
        //var_dump($request->input());     
        $tablename = $request->input('tablename');
        $formData = $request->input();
        array_shift($formData);
        var_dump($formData);
        if (sizeof($formData['docs']) > 1) 
        {
            
        }
        //$result = DB::table($tablename)->updateOrInsert($formData);
        //var_dump($result);                  
          //return view("admin.manage");
    }

    public function delete($id)  // method which is deleteing  chosen  datablock from specific table with specific ID
    {
        DB::table($this->tablename)
        ->where('id','=' , $id)
        ->delete();
        return view("admin.manage");
        exit();
    }
}
