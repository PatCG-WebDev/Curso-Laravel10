@extends('layouts.plantilla')

@section('title', 'Contáctanos')

@section('content')

    <h1>Déjanos un mensaje</h1>
  
    <form action="{{route('contactanos.store')}}" method="post">

        @csrf {{-- token de seguridad --}}

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            E-mail:
            <br>
            <input type="text" name="email" value="{{old('email')}}">
        </label>
        <br>

        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4">{{old('mensaje')}}</textarea>
        </label>
        <br>

        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button type="submit">Enviar mensaje</button>

    </form>

    @if (session('info'))

        <script>
            alert("{{session('info')}}");
        </script>
    @endif
    
@endsection