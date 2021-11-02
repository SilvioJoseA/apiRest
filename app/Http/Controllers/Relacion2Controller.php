<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Display;

class Relacion2Controller extends Controller
{
    public function index(){
       // $displays = Display::all();
       // return view('display',compact(displays));
       return view('display');
    }
}
