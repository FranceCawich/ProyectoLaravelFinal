@extends('layouts.app')
@extends('layouts.script')
@section('content')

<style>
.btnn {
    width: 10%;
}
</style>




<br>
<a href="{{ route('participants.create') }}" class="btn btn-success">Agregar Participantes</a>
<div></div>
<br>

<h1>lista de participantes</h1>
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

@endsection