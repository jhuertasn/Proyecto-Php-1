@extends('layouts.app')

@section('content')

<h1>Acerca de Nosotros</h1>
<br>
<h1>Este es mi equipo de trabajo</h1>

@foreach ($equipo as $integrantes)

    <a href="{{route('about',$integrantes)}}" class="h4 text-danger">
        {{$integrantes}}
    </a>
    <br>
    
@endforeach

    @if (!empty($nombre))

        @switch($nombre)
            @case($nombre == 'Ignacio')
               <h2 class="mt-5">Mi nombre es {{$nombre}}:</h2>
               <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores fugit doloremque eveniet quis delectus ducimus eius, est magnam, dolorum et ea quaerat enim dolore? Modi fuga incidunt dignissimos? Omnis, aliquam!</p> 
                @break
            @case($nombre == 'Juanito')
                <h2 class="mt-5">Mi nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores fugit doloremque eveniet quis delectus ducimus eius, est magnam, dolorum et ea quaerat enim dolore? Modi fuga incidunt dignissimos? Omnis, aliquam!</p> 
                 @break
            @case($nombre == 'Pedrito')
                 <h2 class="mt-5">Mi nombre es {{$nombre}}:</h2>
                 <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores fugit doloremque eveniet quis delectus ducimus eius, est magnam, dolorum et ea quaerat enim dolore? Modi fuga incidunt dignissimos? Omnis, aliquam!</p> 
                  @break     
            @default
                
        @endswitch
    @endif

@endsection