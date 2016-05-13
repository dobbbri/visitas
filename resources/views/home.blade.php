@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card jumbotron" style="background-color: #fff;">
            <h2>{{ $greeting }}, seja bem vindo!</h2>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

            <p><a class="btn btn-success btn-lg" href="#" role="button">Iniciar</a></p>
        </div>
    </div>
@endsection
