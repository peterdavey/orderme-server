<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
| some more tesxt here
|
*/
Route::get('users', function()
{
	$users = User::all();
	
	return View::make('users')->with('users',$users);
});
Route::get('users_json', function()
{
	$users = User::all();

	return Response::view($users);
});

Route::get('user/{id}', 'UserController@showProfile');

Route::get('json/user/{id}', 'UserController@showUser');

Route::get('users_old', function()
{
	return Response::view('hello');
});

Route::get('test', function()
{
	return Response::view('emails/auth/test');
});

Route::get('reminder', function()
{
	return Response::view('emails/auth/test.me');
});


//so how much do pack in here is it enoug
