<?php

 

namespace App\Http\Controllers;

use App\StudentList;

use DB;

use Excel;

use Illuminate\Http\Request;

use App\Http\Requests;


class MaatwebsiteDemoController extends Controller

{

 

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function __construct(){

        $this->middleware('IsAdmin');

    }


    public function importExport()

    {

        return view('importExport');

    }

 

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function downloadExcel($type)
    {

        $data = StudentList::get()->toArray();

        return Excel::create('studentlist', function($excel) use ($data) {

            $excel->sheet('mySheet', function($sheet) use ($data)

            {
                $sheet->fromArray($data);
            });

        })->download($type);
    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function importExcel(Request $request)

    {

        $request->validate([

            'import_file' => 'required'

        ]);

        $path = $request->file('import_file')->getRealPath();

        $data = Excel::load($path)->get();

        if($data->count()){

            foreach ($data as $key => $value) {

                $arr[] = ['studentid' => $value->studentid, 'studentname' => $value->studentname, 'semester' => $value->semester];

            }

            if(!empty($arr)){

                StudentList::insert($arr);

            }

        }

        $request->session()->flash('flash_message', 'posting done successfully!');

        return redirect()->back();

        //return redirect('admin');


    }


}