@extends('layouts.app')

@section('content')
    <h1>Editar nota {{$nota->id}}</h1>

    @if (session('mensaje'))
        <div class="alert alert-success">{{session('mensaje')}}</div>
    @endif

    <form action="{{route('notas.update', $nota->id)}}" method="POST">
        <!--metodo PUT oculto-->
        @method('PUT')
        @csrf 
        
        @error('nombre')
            <div class="alert alert-danger">
              El nombre es obligatorio
            </div>
        @enderror

        @error('descripcion')
            <div class="alert alert-danger">
               La descripcion es obligatoria
            </div>
        @enderror

        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$nota->nombre}}">

        <input type="text" name="descripcion" placeholder="Descripción" class="form-control mb-2" value="{{$nota->descripcion}}">

        <button class="btn btn-warning btn-block" type="submit">Editar</button>
      </form>
      
@endsection