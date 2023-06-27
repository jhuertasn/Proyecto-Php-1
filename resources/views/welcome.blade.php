@extends('layouts.app')
<!--@
  extends('plantilla')-->

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div>
        <div class="car-header d-flex justify-content-between align-items-center">
          <h2>Lista de Notas para
            <!--llamando al usuario-->
             {{auth()->user()->name}}
          </h2>
        </div>
        
        <!--Nota de mensaje-->
        @if (session('mensaje'))
            <div class="alert alert-success">
                {{session('mensaje')}}
            </div>
        @endif
        <form action="{{route('notas.crear')}}" method="POST">
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
          <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
            <input type="text" name="descripcion" placeholder="Descripción" class="form-control mb-2" value="{{old('descripcion')}}">
            <button class="btn btn-primary btn-block" type="submit">Agregar</button>

            
            <a href="{{route('notas.pdf')}}" class=" btn btn-danger btn-block ">PDF</a>
        </form>

        <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($notas as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>
                <a href="{{route('notas.detalle', $item)}}">
                  {{$item->nombre}}
                </a>
                
              </td>
              <td>{{$item->descripcion}}</td>
              <td>
                <a href="{{route('notas.editar',$item)}}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{route('notas.eliminar',$item)}}" method="POST" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger btn-sm" type="submit">
                    Eliminar
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
        <!--Salia error solo poner notas ->links
          se agrandaba mucho la paginacion-->
        {{ $notas->links('pagination::bootstrap-4') }}  

    @endsection
  </body>
</div>
</div>
</div>
</html>