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
        <form method="post" action="{{ route('institutionTypes.update', $institutionTypes -> id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">tipo</label>
                <input type="text" class="form-control" name="tipo" value="{{ $institutionTypes-> tipo }}" />
            </div>

            <button type="submit" class="btn btn-block btn-success">Actualizar evento</button>
        </form>
    </div>
</div>

@endsection