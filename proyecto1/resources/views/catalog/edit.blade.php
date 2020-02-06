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

		            <form action="/foo/bar" method="POST">
		                  {{csrf_field()}}
		               <div class="form-group">
		                  <h6 for="title"><strong>Título</strong></h6>
		                  <input type="text" name="title" id="title" class="form-control">
		               </div>

		               <div class="form-group">
		                  <h6 for="year"><strong>Año</strong></h6>
		                  <input type="text" name="year" id="year" class="form-control">
		               </div>

		               <div class="form-group">
		                  <h6 for="director"><strong>Director</strong></h6>
		                  <input type="text" name="director" id="director" class="form-control">
		               </div>

		               <div class="form-group">
		                  <h6 for="poster"><strong>Portada</strong></h6>
		                  <input type="text" name="poster" id="poster" class="form-control">
		               </div>

		               <div class="form-group">
		                  <h6 for="synopsis"><strong>Resumen</strong></h6>
		                  <textarea name="synopsis" id="synopsis" class="form-control" rows="5"></textarea>
		               </div>

		               <div class="form-group">
		                  <button type="submit" align="center" class="btn btn-primary">
		                      Modificar Película
		                  </button>
		               </div>
		            </form>

		         </div>
		      </div>
		   </div>
		</div>
	@stop
</body>
</html>