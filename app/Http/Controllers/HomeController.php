<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ //con invoke administamos una única ruta, para administrar varias tenemos que crear varios métodos
        //return view('welcome');
    return view('home');
    }
}
