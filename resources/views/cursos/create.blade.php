@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>

    
    <form action="{{route('cursos.store')}}" method="post">

        @csrf {{-- token de seguridad para evitar modificar el formulario de forma externa --}}

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
        </label>

        @error('name') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug')}}"> {{-- el método old va a recuperar lo que habíamos escrito en este campo cuando no se hayan completado todos los campor requeridos --}}
        </label>

        @error('slug') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label>
            Descripción
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>


        <label>
            Categoría
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria') {{-- en esto nos salta un mensaje cuando dejamos vacío un campo requerido --}}
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        
        <button type="submit">Enviar formulario</button>
    </form>
@endsection