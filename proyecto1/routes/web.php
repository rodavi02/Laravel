<?php
Route::get('/', 'HomeController@getHome');
Route::get('login',function() {
	return view('auth.login');
	});
Route::get('logout',function() {
	return 'Usuario desconectado';
	});
Route::get('/catalog/index', 'CatalogController@getIndex');
Route::get('/catalog/show/{id}', 'CatalogController@getShow');
Route::get('/catalog/create', 'CatalogController@getCreate');
Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');
Route::get('/nosotros' , 'PaginasController@nosotros');
Route::get('/contacto' , 'PaginasController@contacto');