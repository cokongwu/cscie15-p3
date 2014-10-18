<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
//	return View::make('hello');
	return View::make("index");
});

Route::get('/lorem-ipsum', function()
{
	return "Lorem ipsum here";
});

Route::post('/lorem-ipsum', function()
{
	return "Lorem ipsum text";
});

Route::get('/random-user', function()
{
	return "Random user page";
});

Route::post('/random-user', function()
{
	return "Random user info";
});

