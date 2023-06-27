@extends('layouts.app')


@section('content')
<div class="container">
    <a href="{{route('inicio')}}" class="btn btn-primary">Inicio</a>
    <a href="{{route('foto')}}" class="btn btn-primary">Fotos</a>
    <a href="{{route('noticias')}}" class="btn btn-primary">Blog</a>
    <a href="{{route('about')}}" class="btn btn-primary">About</a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
