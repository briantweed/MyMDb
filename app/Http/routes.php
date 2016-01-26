<?php

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// LANDING PAGE
Route::get('/', 'WelcomeController@index');

// CHARTS PAGE
Route::get('charts', 'ChartController@index');

Route::post('getCastFromIMDb', 'ApiController@getCastFromIMDb');
Route::post('searchForMovie', 'ApiController@searchForMovie');

// AJAX QUERIES
Route::post('aviary', 'AviaryController@replaceImage');
Route::post('filter', 'AjaxController@filterMovies');
Route::post('getCastDetails', 'AjaxController@getCastDetails');
Route::post('movieFormatCount', 'AjaxController@movieFormatCount');
Route::post('movieRatingCount', 'AjaxController@movieRatingCount');
Route::post('movieCertificateCount', 'AjaxController@movieCertificateCount');
Route::post('movieYearCount', 'AjaxController@movieYearCount');
Route::post('movieDecadeCount', 'AjaxController@movieDecadeCount');

// MOVIES
Route::post('addtag', 'MovieController@addNewTag');
Route::post('addNewCast', 'MovieController@addCastMember');
Route::post('editCastMember', 'MovieController@editCastMember');
Route::post('addNewCrew', 'MovieController@addCrewMember');
Route::post('removeCast', 'MovieController@removeCastMember');
Route::post('removeCrew', 'MovieController@removeCrewMember');
Route::post('confirmDuplicateCast', 'MovieController@confirmDuplicateCast');
Route::post('duplicateCast', 'MovieController@duplicateCast');
Route::resource('movies', 'MovieController', ['only'=>['index','show','create','store','edit','update','destroy']]);

// PERSONS
Route::post('addNewPerson', 'PersonController@addNewPerson');
Route::post('createNewPerson', 'PersonController@createNewPerson');
Route::post('addNewRole', 'PersonController@addNewRole');
Route::post('editRole', 'PersonController@editRole');
Route::post('removeRole', 'PersonController@removeMovieRole');

Route::post('createPosition', 'PersonController@createPersonPosition');
Route::post('editPosition', 'PersonController@editPersonPosition');
Route::post('removePosition', 'PersonController@destroyPersonPosition');
Route::resource('people', 'PersonController', ['only'=>['index','show','create','store','edit','update','destroy']]);

// GENRES
Route::post('createNewGenre', 'GenreController@createNewGenre');
Route::post('storeNewGenre', 'GenreController@storeNewGenre');

// VIEWINGS
Route::post('createMovieViewing', 'ViewingController@createMovieViewing');
Route::post('storeMovieViewing', 'ViewingController@storeMovieViewing');


// ADMIN
Route::get('/admin', 'AdminController@index');
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
