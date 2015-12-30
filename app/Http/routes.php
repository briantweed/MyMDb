<?php

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', 'WelcomeController@index');

Route::get('/admin', 'StudioController@index');
Route::get('/admin/seed', function(){
	Iseed::generateSeed('movies');
	Iseed::generateSeed('persons');
	Iseed::generateSeed('cast');
	Iseed::generateSeed('characters');
	Iseed::generateSeed('categories');
	Iseed::generateSeed('crew');
	Iseed::generateSeed('keywords');
	Iseed::generateSeed('tags');
	Iseed::generateSeed('viewings');
	return Redirect::to('/admin')->with('status', 'Seeds created for all tables');
});

Route::post('aviary', 'AviaryController@replaceImage');
Route::post('filter', 'FilterController@filterMovies');

Route::resource('movies', 'MovieController', ['only'=>['index','show','create','store','edit','update','destroy']]);
Route::resource('people', 'PersonController', ['only'=>['index','show','create','store','edit','update','destroy']]);
Route::resource('characters', 'CharacterController', ['only'=>['index','show']]);


Route::group(['prefix'=>'admin'], function() {
	Route::resource('keywords', 'KeywordController', ['only'=>['index','show']]);
	Route::resource('genres', 'GenreController', ['only'=>['index','show']]);
	Route::resource('studios', 'StudioController', ['only'=>['index','show']]);
	Route::resource('viewings', 'ViewingController', ['only'=>['index','show']]);
});
