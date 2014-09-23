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
	return Response::view('hello test text');
});


//so how much do pack in here is it enoug
