@extends('layouts.plantilla')

@section('title', 'Curso'. $curso->name)

@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Editar curso</a>
    <p><strong>Categoría: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST"> {{-- lo hacemos desde un formulario porque si lo hacemos desde un enlace a una url lo hará utilizando el método get, y nosotros quremos que utilice el método delete --}}
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

@endsection