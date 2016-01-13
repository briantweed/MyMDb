<?php

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', 'WelcomeController@index');


Route::post('aviary', 'AviaryController@replaceImage');
Route::post('filter', 'AjaxController@filterMovies');
Route::post('movieYearCount', 'AjaxController@movieYearCount');
Route::post('movieDecadeCount', 'AjaxController@movieDecadeCount');

Route::post('addtag', 'MovieController@addNewTag');
Route::post('addNewCast', 'MovieController@addCastMember');
Route::post('addNewCrew', 'MovieController@addCrewMember');
Route::post('removeCast', 'MovieController@removeCastMember');
Route::post('removeCrew', 'MovieController@removeCrewMember');
Route::resource('movies', 'MovieController', ['only'=>['index','show','create','store','edit','update','destroy']]);

Route::post('addNewPerson', 'PersonController@addNewPerson');
Route::post('createNewPerson', 'PersonController@createNewPerson');
Route::post('addNewRole', 'PersonController@addNewRole');
Route::resource('people', 'PersonController', ['only'=>['index','show','create','store','edit','update','destroy']]);

Route::resource('characters', 'CharacterController', ['only'=>['index','show']]);


Route::get('/admin', 'StudioController@index');
Route::group(['prefix'=>'admin'], function() {
	Route::resource('keywords', 'KeywordController', ['only'=>['index','show']]);
	Route::resource('genres', 'GenreController', ['only'=>['index','show']]);
	Route::resource('studios', 'StudioController', ['only'=>['index','show']]);
	Route::resource('viewings', 'ViewingController', ['only'=>['index','show']]);
});

Route::get('/admin/seed', function(){
	if(env('APP_ENV')=="local")
	{
		Iseed::generateSeed('cast');
		Iseed::generateSeed('categories');
		Iseed::generateSeed('crew');
		Iseed::generateSeed('certificates');
		Iseed::generateSeed('formats');
		Iseed::generateSeed('forms');
		Iseed::generateSeed('genres');
		Iseed::generateSeed('keywords');
		Iseed::generateSeed('movies');
		Iseed::generateSeed('persons');
		Iseed::generateSeed('quotes');
		Iseed::generateSeed('studios');
		Iseed::generateSeed('tags');
		Iseed::generateSeed('users');
		Iseed::generateSeed('viewings');
		return Redirect::to('/admin')->with('status', 'Seeds created for all tables');
	}
	return Redirect::to('/admin')->with('status', 'Not allowed in production');
});
