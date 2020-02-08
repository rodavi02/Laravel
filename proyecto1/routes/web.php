<?php
Route::get('/', 'HomeController@getHome');

Route::get('login',function() {
	return view('auth.login');
});

Route::get('logout',function() {
	return 'Usuario desconectado';
});

Route::group(['middleware' => 'auth'], function() {
	Route::get('/catalog/index', 'CatalogController@getIndex');
	Route::get('/catalog/show/{id}', 'CatalogController@getShow');
	Route::post('/catalog/create', 'CatalogController@postCreate');
	Route::get('/catalog/create', 'CatalogController@getCreate');
	Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');
	Route::put('/catalog/edit/{id}', 'CatalogController@putEdit');
	Route::put('catalog/rent/{id}', 'CatalogController@putRent');
	Route::put('catalog/return/{id}', 'CatalogController@putReturn');
	Route::delete('catalog/delete/{id}', 'CatalogController@deleteMovie');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');