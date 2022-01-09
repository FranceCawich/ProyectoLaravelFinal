@extends('layouts.app')

@section('content')

<style>
.push-top {
    margin-top: 50px;
}
</style>

<div class="card push-top">
    <div class="card-header">
        Actualizar Registro
    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('events.update', $eventos -> id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $eventos-> nombre }}" />
            </div>
            <br>
            <div class="form-group">
                <label for="email">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="{{ $eventos-> descripcion }}" />
            </div>

            <br>
            <div class="form-group">
                <label for="email">FechaInicio</label>
                <input type="Date" class="form-control" name="fechainicio" value="{{ $eventos-> fechaInicio }}" />
            </div>
            <br>
            <div class="form-group">
                <label for="email">Fechafin</label>
                <input type="Date" class="form-control" name="fechafin" value="{{ $eventos-> fechafin}}" />
            </div>
            <button type="submit" class="btn btn-block btn-success">Actualizar evento</button>
        </form>
    </div>
</div>
@endsection