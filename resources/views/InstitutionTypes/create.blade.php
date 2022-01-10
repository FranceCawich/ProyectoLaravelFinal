@extends('layouts.app')

@section('content')

<style>
.push-top {
    margin-top: 50px;
}
</style>

<br>
<a href="{{ route('institutionTypes.index') }}" class="btn btn-success">Regresar</a>
<br>
<h1>Insertar Institution</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('institutionTypes.store') }}">
            <div class="form-group">
                @csrf
                <label for="name">tipo</label>
                <input type="text" class="form-control" name="tipo" />
            </div>

            <button type="submit" class="btn btn-block btn-success">agregar Tipo</button>
        </form>
    </div>

</div>

@endsection