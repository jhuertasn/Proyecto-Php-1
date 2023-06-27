@extends('layouts.app')

@section('content')

<h1>Blog</h1>
<br>
<h1>Estos son los Blog del dia</h1>

@foreach ($news as $noticias)

    <a href="{{route('noticias',$noticias)}}" class="h4 text-danger">
        {{$noticias}}
    </a>
    <br>
    
@endforeach

    @if (!empty($nombre))

        @switch($nombre)
            @case($nombre == 'Noticia1')
               <h2 class="mt-5">{{$nombre}}:</h2>
               <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores fugit doloremque eveniet quis delectus ducimus eius, est magnam, dolorum et ea quaerat enim dolore? Modi fuga incidunt dignissimos? Omnis, aliquam!</p> 
                @break
            @case($nombre == 'Noticia2')
                <h2 class="mt-5">{{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores fugit doloremque eveniet quis delectus ducimus eius, est magnam, dolorum et ea quaerat enim dolore? Modi fuga incidunt dignissimos? Omnis, aliquam!</p> 
                 @break
            @case($nombre == 'Noticia3')
                 <h2 class="mt-5">{{$nombre}}:</h2>
                 <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores fugit doloremque eveniet quis delectus ducimus eius, est magnam, dolorum et ea quaerat enim dolore? Modi fuga incidunt dignissimos? Omnis, aliquam!</p> 
                  @break     
            @default
                
        @endswitch
    @endif

@endsection