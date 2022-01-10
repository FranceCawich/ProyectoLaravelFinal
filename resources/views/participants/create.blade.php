@extends('layouts.app')

@section('content')

<style>
.push-top {
    margin-top: 50px;
}
</style>
<br>
<a href="{{ route('participants.index') }}" class="btn btn-success">Regresar</a>
<br>
<h1>Ingresar nuevo Participante</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('participants.store') }}">
            <div class="form-group">
                @csrf
                <label for="name">ApellidoPaterno</label>
                <input type="text" class="form-control" name="apellidoPaterno" />
            </div>
            <div class="form-group">
                <label for="text">ApellidoMaterno</label>
                <input type="text" class="form-control" name="apellidoMaterno" />
            </div>
            <br>
            <div class="form-group">
                <label for="text">Nombre</label>
                <input type="text" class="form-control" name="nombre" />
            </div>
            <div> <label for="text">email</label>
                <input type="text" class="form-control" name="email" />
            </div>
            <div> <label for="text">telefono</label>
                <input type="text" class="form-control" name="telefono" />
            </div>
            <div> <label for="text">genero</label>
                <input type="text" class="form-control" name="genero" />
            </div>


            <button type="submit" class="btn btn-block btn-success">agregar Participantes</button>
        </form>
    </div>

</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection