@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta página podrás editar un curso</h1>

    
    <form action="{{route('cursos.update', $curso)}}" method="post">

        @csrf {{-- token de seguridad para evitar modificar el formulario de forma externa --}}
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value='{{old('name', $curso->name)}}'>
        </label>

        @error('name') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>


        <label>
            Descripción
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

        @error('descripion') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>


        <label>
            Categoría
            <br>
            <input type="text" name="categoria" value='{{old('categoria', $curso->categoria)}}'>
        </label>

        @error('categoria') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>


        <button type="submit">Actualizar formulario</button>
    </form>
@endsection