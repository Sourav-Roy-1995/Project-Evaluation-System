<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NormalController extends Controller
{
    //

    public function __construct(){

    	 $this->middleware('IsNormal');
    }


    public function index(){

		return view('index');
	}
}
