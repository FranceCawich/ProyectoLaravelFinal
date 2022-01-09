@extends('layouts.app')

@section('content')

<style>
.push-top {
    margin-top: 50px;
}
</style>

<div class="card push-top">
    <div class="card-header">
        agregar unparticipante
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
        <form method="post" action="{{ route('institution.store') }}">
            <div class="form-group">
                @csrf
                <label for="name">NombreLargo</label>
                <input type="text" class="form-control" name="NombreLargo" />
            </div>
            <div class="form-group">
                <label for="text">NombreCorto</label>
                <input type="text" class="form-control" name="NombreCorto" />
            </div>
            <br>
            <div class="form-group">
                <label for="text">InstiutionTypeID</label>
                <input type="text" class="form-control" name="institutionTypeID" />
            </div>



            <button type="submit" class="btn btn-block btn-success">agregar Participantes</button>
        </form>
    </div>

</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection