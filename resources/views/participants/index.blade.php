@extends('layouts.app')
@section('content')

<style>
.btnn {
    width: 10%;
}
</style>
<h1>lista de participantes</h1>



<br>
<a href="{{ route('participants.create') }}" class="btn btn-success">agregar Participantes</a>
<div></div>
<br>
<br>
<br>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ApellidoPaterno</th>
            <th scope="col">ApellidoMaterno</th>
            <th scope="col">nombre</th>
            <th scope="col">email</th>
            <th scope="col">telefono</th>
            <th scope="col">genero</th>


        </tr>
    </thead>
    <tbody>
        <tr @foreach ($participants as $key=> $evt)>
            <th scope="row">{{$key}}</th>
            <td>{{ $evt->apellidoPaterno }}</td>
            <td>{{ $evt->apellidoMaterno }}</td>
            <td>{{ $evt->nombre}}</td>
            <td>{{ $evt->email }}</td>
            <td>{{ $evt->telefono }}</td>
            <td>{{ $evt->genero }}</td>
            <td>
                <a href="{{ route('participants.edit', $evt->id) }}" class="btn btn-warning">Actualizar</a>
            </td>
            <td>
                <form action="{{ route('participants.destroy', $evt->id) }}" method="POST">
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