<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Mockery\Undefined;

class ManageController extends Controller
{
    private $root = "path/to/file/onServer"; 

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


    // TODO : dokocnit to  pre EVENT  nie len pre TOPIC, GALLERY a BACHA na stackovanie suborov  (ktore nechceme mazat aj z  FOLDEROV)
    public function add(Request $request) //method used to add data or update them in the  table
    {     
        $tablename = $request->input('tablename');
        $formData = $request->input();
        $thumbnail = $request->file('thumbnail'); // gets thumbnail image 

        //fileter tablename from data
        array_shift($formData);

        // creating rootfolder for each topic
        $path = $this->root.'/uploads/'.$tablename.'/'.$formData['header'];
        //mkdir($path);

        if($tablename == "events")
        {
            // treba si premyslet co setko bude mat ci aj subor alebo nie a a nejaky banner(optionalny)
        }

        // TRUE :if thumhbnail is uploaded
        if (!empty($thumbnail)) {
            $fileName = $thumbnail->getClientOriginalName();
            $thumbnail->move($path, $fileName);
            //$thumbnail->move(public_path('uploads'), $fileName);  // saves insdie server files 
     
        }

        if ($tablename == "galleries") {
            $files = $request->file('photos'); // gets uploaded files  
            //$filesPath =$path
        }
        $files = $request->file('docs'); // gets uploaded photos 

        // TRUE if: input has atleast one file 
        if (!empty($files)) 
        {
            $filesPath =$path.'/prilohy';
            //mkdir($filesPath);
            foreach ($files as $file)
            {
                // pridat este to ze ak sa robi edit tak treba subory ktore nie su v array zmazat a pridat nove
                $fileName = $file->getClientOriginalName();
                var_dump($fileName);
                // echo "<br>";
                //$file->move($filesPath, $fileName); 
                //$file->move(public_path('uploads'), $fileName);  // saves insdie server files 
            }
            array_splice($formData, -sizeof($formData)+1, 0, $filesPath); // insert into array an thumnbnail name
            array_splice($formData, -1, 0, $filesPath); // insert folderpath inside 
        }
        //$result = DB::table($tablename)->updateOrInsert($formData);   // makes an record inside DB
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
