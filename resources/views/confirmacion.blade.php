@extends('layouts.app')

@section('content')

<div class="container">
        <h1>
                <strong>Nombre</strong>: {{$nombre}}
            </h1>
    <h1>
        <strong>Contraseña</strong>: {{$pass}}
    </h1>
<a class="btn btn-success" href="../../home">Listo</a>
</div>
@endsection
