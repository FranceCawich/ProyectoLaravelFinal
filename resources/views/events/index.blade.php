@extends('layouts.app')
@extends('layouts.script')
@section('content')

<style>
.btnn {
    width: 10%;
}
</style>




<br>
<a href="{{ route('events.create') }}" class="btn btn-success">Crear evento</a>
<div></div>
<br>
<h1>Lista De Eventos Realizados </h1>

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

@endsection