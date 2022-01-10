@extends('layouts.app')
@extends('layouts.script')

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
        <form method="post" action="{{ route('institutions.update', $institutcion -> id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">NombreLargo</label>
                <input type="text" class="form-control" name="NombreLargo" value="{{ $institutcion-> NombreLargo }}" />
            </div>
            <br>
            <div class="form-group">
                <label for="email">NombreCorto</label>
                <input type="text" class="form-control" name="NombreCorto" value="{{ $institutcion-> NombreCorto }}" />
            </div>
            <br>
            <div class="form-group">
                <label for="email">institutionTypeId</label>
                <input type="text" class="form-control" name="institution_type_id"
                    value="{{ $institutcion-> institution_type_id}}" />
            </div>

            <button type="submit" class="btn btn-block btn-success">Actualizar evento</button>
        </form>
    </div>
</div>

@endsection