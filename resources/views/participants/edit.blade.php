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
        <form method="post" action="{{ route('participants.update', $participants -> id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">apellidoPaterno</label>
                <input type="text" class="form-control" name="apellidoPaterno"
                    value="{{ $participants-> apellioPaterno }}" />
            </div>
            <br>
            <div class="form-group">
                <label for="email">apellidoMaterno</label>
                <input type="text" class="form-control" name="apellidoMaterno"
                    value="{{ $participants-> apellidoMaterno }}" />
            </div>

            <br>
            <div class="form-group">
                <label for="email">Nombres</label>
                <input type="text" class="form-control" name="nombre" value="{{ $participants-> Nombres }}" />
            </div>
            <br>
            <div class="form-group">
                <label for="email">genero</label>
                <input type="text" class="form-control" name="genero" value="{{ $participants-> genero}}" />
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email" value="{{ $participants-> email}}" />
            </div>
            <div class="form-group">
                <label for="email">telefono</label>
                <input type="text" class="form-control" name="telefono" value="{{ $participants-> telefono}}" />
            </div>
            <button type="submit" class="btn btn-block btn-success">Actualizar evento</button>
        </form>
    </div>
</div>

@endsection