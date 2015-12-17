<?php

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', 'MovieController@index');
Route::get('/', 'MovieController@index');
Route::get('/admin', 'StudioController@index');

Route::post('aviary', 'AviaryController@replaceImage');

Route::resource('movies', 'MovieController', ['only'=>['index','show','create','store','edit','update']]);
Route::resource('people', 'PersonController', ['only'=>['index','show']]);
Route::resource('characters', 'CharacterController', ['only'=>['index','show']]);


Route::group(['prefix'=>'admin'], function() {
	Route::resource('keywords', 'KeywordController', ['only'=>['index','show']]);
	Route::resource('genres', 'GenreController', ['only'=>['index','show']]);
	Route::resource('studios', 'StudioController', ['only'=>['index','show']]);
	Route::resource('viewings', 'ViewingController', ['only'=>['index','show']]);
});
