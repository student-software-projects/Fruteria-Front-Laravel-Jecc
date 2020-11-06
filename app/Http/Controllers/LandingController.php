<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
     public function index(){
         return view('Landing.index');

     }
     public function Acerca_de(){
         return view('Landing.Acerca_de');

}
    public function domicilio(){
        return view('Landing.domicilio');

    }
    public function banano(){
        return view('Landing.banano');

    }
    public function fresa(){
        return view('Landing.fresa');

    }
    public function kiwi(){
        return view('Landing.kiwi');

    }
    public function mango(){
        return view('Landing.mango');

    }
    public function manzana(){
        return view('Landing.manzana');

    }
    public function mora(){
        return view('Landing.mora');

    }
    public function sandia(){
        return view('Landing.sandia');

    }

 }
