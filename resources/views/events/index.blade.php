@extends('layouts.app')
@section('content')

<style>
.btnn {
    width: 10%;
}
</style>
<h1>Lista de eventos realizados </h1>



<br>
<a href="{{ route('events.create') }}" class="btn btn-success">Crear evento</a>
<div></div>
<br>
<br>
<br>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">FechaInicio</th>
            <th scope="col">FechaFin</th>
            <th scope="col">Actulizar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <tr @foreach ($events as $key=> $evt)>
            <th scope="row">{{$key}}</th>
            <td>{{ $evt->nombre }}</td>
            <td>{{ $evt->descripcion }}</td>
            <td>{{ $evt->fechaInicio }}</td>
            <td>{{ $evt->fechaFin }}</td>
            <td>
                <a href="{{ route('events.edit', $evt->id) }}" class="btn btn-warning">Actualizar</a>
            </td>
            <td>
                <form action="{{ route('events.destroy', $evt->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i>borrar</button>
                </form>
                <!-- <td><button type="submit" ><i class="bi bi-trash"></i></button></td> -->

                <!-- <td><button ><i class="bi bi-pencil-fill"></i></button></td> -->
        </tr @endforeach>
    </tbody>
</table>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection