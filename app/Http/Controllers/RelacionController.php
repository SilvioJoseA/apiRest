<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

use App\Models\Company;
use App\Models\Display;

class RelacionController extends Controller
{
    public function index(){
         $productos = Producto::all();
         
        // var_dump($productos);
         //die();
         return view('welcome',compact('productos'));
    }

    public function index1(){
        $displays = Display::all();
        return view('welcome',compact(displays));
    }
}
