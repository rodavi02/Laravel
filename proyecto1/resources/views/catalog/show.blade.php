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
						<br>
						<p><form action="{{action('CatalogController@putRent', $id->id)}}" method="POST">
							{{ method_field('PUT') }}
							{{ csrf_field() }}
							<button type="submit" class="btn btn-primary">Alquilar película</button>
						</form></p>
					@else
						Película actualmente alquilada.
						<br>
						<p><form action="{{action('CatalogController@putReturn', $id->id)}}" method="POST">
							{{ method_field('PUT') }}
							{{ csrf_field() }}
							<button type="submit" class="btn btn-danger">Devolver película</button>
						</form></p>
					@endif
					<p><a href="{{url('catalog/edit/'.$id->id)}}"><button type="button" class="btn btn-warning">Editar película</button></a></p>
					<p><form action="{{action('CatalogController@deleteMovie', $id->id)}}" method="POST">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<button type="submit" class="btn btn-dark">Eliminar película</button>
					</form></p>
					<p><a href="{{url('/')}}"><button type="button" class="btn">< Volver al listado</button></a></p>
				</p>
			</div>
		</div>
	@stop
</body>
</html>