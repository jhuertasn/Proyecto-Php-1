<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center">Detalle de las Notas</h1>

<!--Centrar imagen-->
    <div class="col-md-6 text-center">
    <img  src="{{public_path() . '/images/AlfinBanco 1445x410.jpg'}}" alt="" width="300" height="100">
    </div>
    <br>

{{-- <h4>id: {{$notas->id}}</h4>
<h4>Nombre: {{$notas->nombre}}</h4>
<h4>Detalle: {{$notas->descripcion}}</h4> --}}

<!--reutilizando la tabla de notas de index en la carpeta post-->
                    <table class="table">          
                        <thead class="thead-dark">
                        <tr>
                          <th scope="col">#id</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Descripción</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($notas as $nota)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">{{$nota->id}}</td>
                                <td class="px-6 py-4">{{$nota->nombre}}</td>
                                <td class="px-6 py-4">{{$nota->descripcion}} </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{$notas->links()}}
</body>
</html>