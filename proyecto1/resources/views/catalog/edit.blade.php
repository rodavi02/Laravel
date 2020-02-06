<!DOCTYPE html>
<html>
<head>
	<title>Laravel Juanfran</title>
</head>
<body>
	@extends('layouts.master')
	@section('content')
		<div class="row" style="margin-top:40px">
		   <div class="offset-md-3 col-md-6">
		      <div class="card">
		         <div class="card-header text-center">
		            <h3><strong>Modificar Película</strong></h3>
		         </div>
		         <div class="card-body" style="padding:30px">

		            <form action="{{url('/catalog/edit/'.$id->id)}}" method="POST">
		                  {{csrf_field()}}
		                  @method('put')
		               <div class="form-group">
		                  <h6 for="title"><strong>Título</strong></h6>
		                  <input type="text" name="title" id="title" class="form-control" value="{{$id->title}}">
		               </div>

		               <div class="form-group">
		                  <h6 for="year"><strong>Año</strong></h6>
		                  <input type="text" name="year" id="year" class="form-control" value="{{$id->year}}">
		               </div>

		               <div class="form-group">
		                  <h6 for="director"><strong>Director</strong></h6>
		                  <input type="text" name="director" id="director" class="form-control" value="{{$id->director}}">
		               </div>

		               <div class="form-group">
		                  <h6 for="poster"><strong>Portada</strong></h6>
		                  <input type="text" name="poster" id="poster" class="form-control" value="{{$id->poster}}">
		               </div>

		               <div class="form-group">
		                  <h6 for="synopsis"><strong>Resumen</strong></h6>
		                  <textarea name="synopsis" id="synopsis" class="form-control" rows="5">{{$id->synopsis}}</textarea>
		               </div>

		               <div class="form-group">
		                  <a href="{{url('catalog/show/'.$id->id)}}"><button type="submit" align="center" class="btn btn-primary">
		                      Modificar Película
		                  </button></a>
		               </div>
		            </form>

		         </div>
		      </div>
		   </div>
		</div>
	@stop
</body>
</html>