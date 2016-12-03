<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	// Show the path of website
	// return realpath(base_path('resources/views'));
    return view('welcome');
});

// This Route link to index of users page
Route::get('users', 'UsersController@index');

Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');

/*
	This below code fragment is same way to define UsersController
*/
/*
Route::get('/users', function() {
	$users = [
		0 => [
			'first_name' => 'Nho',
			'last_name' => 'Nguyen',
			'location' => 'Da Nang'
		],
		1 => [
			'first_name' => 'Minh',
			'last_name' => 'Tran',
			'location' => 'Quang Nam'
		]
	];
	return $users;
});
*/


Auth::routes();

Route::get('/home', 'HomeController@index');
