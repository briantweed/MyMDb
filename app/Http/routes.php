<?php

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'lists'], function() {

	Route::resource('movies', 'MovieController', ['only'=>['index','show']]);
	Route::resource('people', 'PersonController', ['only'=>['index','show']]);

});
