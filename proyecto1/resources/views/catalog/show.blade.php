<!DOCTYPE html>
<html>
<head>
	<title>Laravel Juanfran</title>
</head>
<body>
	@extends('layouts.master')
	@section('content')
		<div class="row">
			<div class="col-sm-4">
				<img src="{{$id->poster}}">
			</div>
			<div class="col-sm-8">
				<h4><strong>{{$id->title}}</strong></h4>
				<h6>Año: {{$id->year}}</h6>
				<h6>Director: {{$id->director}}</h6>
				<p><strong>Resumen:</strong> {{$id->synopsis}}</p>
				<p>
					<strong>Estado:</strong> 
					@if ($id->rented == false)
						Película actualmente disponible.
						<br><br>
						<button type="button" class="btn btn-primary">Alquilar película</button>	
					@else
						Película actualmente alquilada.
						<br><br>
						<button type="button" class="btn btn-danger">Devolver película</button>
					@endif
					<a href="{{url('catalog/edit/'.$id->id)}}"><button type="button" class="btn btn-warning">Editar película</button></a>
					<a class="btn" href="{{url('/')}}"><button type="button" class="btn"> < Volver al listado</button></a>
				</p>
			</div>
		</div>
	@stop
</body>
</html>