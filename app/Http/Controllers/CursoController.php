<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use GuzzleHttp\Promise\Create;
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

    public function store(StoreCurso $request){ /* es una instancia de la clase StoreCurso */

        $curso = Curso::create( $request->all());

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
            'name' => 'required|min:3',
            'slug' => 'required|unique:cursos,slug' . $curso->id, /* con esta regla de validación lo que va a tener en cuenta es el id del curso para no comparar el slug con el que ya tenía ese mismo curso, sólo con el resto de cursos */
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index', $curso);
    }

    public function test(Curso $curso){

        return view('cursos.test', compact('curso'));
    }
}