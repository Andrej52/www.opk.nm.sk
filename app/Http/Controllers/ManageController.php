<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Mockery\Undefined;

class ManageController extends Controller
{
    public function showform($type,$action,$id = null)
    {
        $tmp = $type.'s';

        if ($action === 'delete') {
            $this->delete($tmp,$id);
        }
        if ($id == null) 
        {
           return view('admin.manage.'.$type)
            ->with('action',$action);
        }

        $data=DB::table($tmp)
        ->where('id', '=',$id)
        ->get();
        
        return view('admin.manage.'.$type)
        ->with('action',$action)
        ->with('data', $data);
    }

    public function show()   //method do get all data from  tables below
    {
        $data[0]=DB::table('topics')->get();
        $data[1]=DB::table('galleries')->get();
        $data[2]=DB::table('events')->get();
        return $data;
    }

    public function add(Request $request) //method used to add data or update them in the  table
    {    
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
    public function delete($tablename,$id)  // method which is deleteing  chosen  datablock from specific table with specific Id
    {
        $result=DB::table($tablename)
        ->where('id','=' , $id)->exists();
        if ($result != 1) {
          //  return view("admin.manage");
        }

        $data=DB::table($tablename)
        ->where('id','=' , $id)
        ->get();
       /* if (!is_dir($data[0]->header)) {
            # code...
        }
        
        rmdir($path,$data[0]->header."/*");
        DB::table($tablename)
        ->where('id','=' , $id)
        ->delete();
        */
       // return view("admin.manage")
    }
}
