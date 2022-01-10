@extends('layouts.app')
@extends('layouts.script')
@section('content')

<style>
.btnn {
    width: 10%;
}
</style>


<br>
<a href="{{route('institutions.create')}}" class="btn btn-success">agregar institution</a>
<div></div>
<br>
<h1>Lista de institutiones </h1>

<table class="table">
    <thead>
        <tr>

            <th scope="col">NombreCorto</th>
            <th scope="col">Nombrelargo</th>
            <th scope="col">institutionTypeId</th>

             <th scope="col">TIPO</th>
            
            <th scope="col">Actulizar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <tr @foreach ($institutcion as $key=>$evt)
            <th scope="row"></th>
            <td>{{ $evt['NombreCorto']}}</td>
            <td>{{ $evt['NombreLargo']}}</td>
            <td>{{ $evt['institution_type_id']}}</td>
            <td>{{ $evt['tipo']}}</td>




            <td>
                <a href="{{route('institutions.edit', $evt->id) }}" class="btn btn-warning">Actualizar</a>
            </td>
            <td>
                <form action="{{route('institutions.destroy', $evt->id) }}" method="POST">
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