@extends('layouts.app')




@section('content')

<!DOCTYPE html>
<html>
<head>
<style>
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
</head>
<body>

<h2>MENU DEL DASHBOARD</h2>
<p>MENU DEL DASHBOARD DE EVENTOS </p>

<div class="center">


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
<div> 
</div>

</body>
</html>


@endsection
