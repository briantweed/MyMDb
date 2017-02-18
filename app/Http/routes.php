<?php

Route::group(['domain' => env('DOMAIN_NAME'), 'after' => 'no-cache'], function () {

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

	// LANDING PAGE
	Route::get('/', 'WelcomeController@index');

	// STATS PAGE
	Route::get('charts', 'StatsController@index');

	// SEARCH PAGE
	Route::get('search', 'SearchController@index');

	// API CALLS
	Route::post('searchForMovie', 'ApiController@searchForMovie');
	Route::post('getCastFromIMDb', 'ApiController@getCastFromIMDb');
	Route::post('createImdbActor', 'ApiController@createImdbActor');

	// AJAX QUERIES
	Route::get('filter', 'AjaxController@index');
	Route::post('filter', 'AjaxController@filterMovies');
	Route::post('aviary', 'AviaryController@replaceImage');
	Route::post('movieYearCount', 'AjaxController@movieYearCount');
	Route::post('getCastDetails', 'AjaxController@getCastDetails');
	Route::post('movieGenreCount', 'AjaxController@movieGenreCount');
	Route::post('movieFormatCount', 'AjaxController@movieFormatCount');
	Route::post('movieRatingCount', 'AjaxController@movieRatingCount');
	Route::post('movieDecadeCount', 'AjaxController@movieDecadeCount');
	Route::post('movieCertificateCount', 'AjaxController@movieCertificateCount');

	// MOVIES
	Route::post('addtag', 'MovieController@addNewTag');
	Route::post('addNewCast', 'MovieController@addCastMember');
	Route::post('addNewCrew', 'MovieController@addCrewMember');
	Route::post('removeCast', 'MovieController@removeCastMember');
	Route::post('removeCrew', 'MovieController@removeCrewMember');
	Route::post('duplicateCast', 'MovieController@duplicateCast');
	Route::post('editCastMember', 'MovieController@editCastMember');
	Route::post('confirmDuplicateCast', 'MovieController@confirmDuplicateCast');
	Route::resource('movies', 'MovieController', ['only'=>['index','show','create','store','edit','update','destroy']]);

	// PERSONS
	Route::post('editRole', 'PersonController@editRole');
	Route::post('addNewRole', 'PersonController@addNewRole');
	Route::post('addNewPerson', 'PersonController@addNewPerson');
	Route::post('removeRole', 'PersonController@removeMovieRole');
	Route::post('editPosition', 'PersonController@editPersonPosition');
	Route::post('createNewPerson', 'PersonController@createNewPerson');
	Route::post('createPosition', 'PersonController@createPersonPosition');
	Route::post('removePosition', 'PersonController@destroyPersonPosition');
	Route::resource('people', 'PersonController', ['only'=>['index','show','create','store','edit','update','destroy']]);

	// GENRES
	Route::post('storeNewGenre', 'GenreController@storeNewGenre');
	Route::post('createNewGenre', 'GenreController@createNewGenre');

	// VIEWINGS
	Route::post('storeMovieViewing', 'ViewingController@storeMovieViewing');
	Route::post('createMovieViewing', 'ViewingController@createMovieViewing');

	// ADMIN
	Route::group(['prefix' => 'admin'], function () {
		Route::get('/', 'AdminController@index');
		Route::post('/quotes', 'QuoteController@index');
		Route::post('/genres', 'GenreController@index');
		Route::post('/studios', 'StudioController@index');
		Route::post('/keywords', 'KeywordController@index');
		Route::post('/viewings', 'ViewingController@index');
		Route::post('/strip', 'MovieController@strip');
	});

	// SEED CREATOR
	Route::get('/admin/seed', function(){
		if(env('BACKUP_STATUS')=="all")
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
			return Redirect::to('/admin')->with('status', 'Seeds created for all tables');
		}
		Iseed::generateSeed('viewings');
		return Redirect::to('/admin')->with('status', 'Viewings backed up');
	});

});

Route::filter('no-cache', function($route, $request, $response){
    $response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
    $response->headers->set('Pragma','no-cache');
    $response->headers->set('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
});
