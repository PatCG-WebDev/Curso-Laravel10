<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CursoController extends Controller //los nombres que designan los siguientes métodos pueden cambiarse por lo que queramos, pero por conveccioón se le pone esos
{
    public function index(){ //muestra la página principal

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){ //muestra el formulario para que puedas crear un curso, o elemento que quieras
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);

    }
    public function show(Curso $curso){//muestra un elemento en particular

        return view('cursos.show', compact('curso')); //pasamos la variable curso a la vista a través del segundo parámetro. También se puede hacer como la línea siguiente
        
        //return view('cursos.show', ['curso' => $curso]); // con el segundo parámetro le pasamos la variable $curso a la vista mediante un array
    }

    public function edit(Curso $curso){

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name'=>'required|min:3',
            'descripcion'=>'required',
            'categoria'=>'required',
        ]);


        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}