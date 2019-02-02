<?php

/*
* 	Home
*/

Route::get('/','HomeController@index');

Route::get('/alerts', function() {
	return redirect('/')->with('info','You have Signed Up');
    // return redirect()->with('info','You have Signed up');
});


/**
*	Authentication
*/

Route::get('/signup','AuthController@getSignUp');
Route::post('/signup','AuthController@postSignUp');