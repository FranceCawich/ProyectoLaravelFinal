@extends('layouts.app')
@section('content')

<style>
.btnn {
    width: 10%;
}
</style>
<h1>Lista de eventos realizados </h1>



<br>
<a href="{{ route('institutionTypes.create') }}" class="btn btn-success">agregar Tipo de institution</a>
<div></div>
<br>
<br>
<br>

<table class="table">
    <thead>
        <tr>

            <th scope="col">tipo</th>

            <th scope="col">Actulizar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <tr @foreach ($institutionTypes as $key=> $evt)
            <th scope="row">{{$key}}</th>
            <td>{{ $evt->tipo }}</td>

            <td>
                <a href="{{ route('institutionTypes.edit', $evt->id) }}" class="btn btn-warning">Actualizar</a>
            </td>
            <td>
                <form action="{{ route('institutionTypes.destroy', $evt->id) }}" method="POST">
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