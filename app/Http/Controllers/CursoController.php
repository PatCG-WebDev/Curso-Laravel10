<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller //los nombres que designan los siguientes métodos pueden cambiarse por lo que queramos, pero por conveccioón se le pone esos
{
    public function index(){ //muestra la página principal
        return view('cursos.index');
    }

    public function create(){ //muestra el formulario para que puedas crear un curso, o elemento que quieras
        return view('cursos.create');
    }
    public function show($curso){ //muestra un elemento en particular
        return view('cursos.show', compact('curso')); //pasamos la variable curso a la vista a través del segundo parámetro. También se puede hacer como la línea siguiente
        
        //return view('cursos.show', ['curso' => $curso]); // con el segundo parámetro le pasamos la variable $curso a la vista mediante un array
    }
}
