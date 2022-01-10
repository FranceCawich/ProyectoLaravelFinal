@extends('layouts.app')


@section('content')


<br>
<a href="{{ route('events.index') }}" class="btn btn-success">Crear Y Ver Eventos</a>
<div></div>
<br>


<br>
<a href="{{ route('participants.index') }}" class="btn btn-success">Insertar Participantes</a>
<div></div>
<br>




<br>
<a href="{{ route('institutions.index') }}" class="btn btn-success">Insertar Una Institution</a>
<div></div>
<br>



<br>
<a href="{{ route('institutionTypes.index') }}" class="btn btn-success">Insertar Tipo Institution</a>
<div></div>
<br>

@endsection
