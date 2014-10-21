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

Route::get("/", function()
{
//	return View::make('hello');
	return View::make("index");
});

Route::get("/xkcd-generator", function()
{
	$result = " ";
	return View::make("xkcd-generator")
		->with("result", $result);
});

Route::post("/xkcd-generator", function()
{
	$library = new Library();
	$result = $library->xkcdGen();
	return View::make("xkcd-generator")->with("result", $result);
});

Route::get("/lorem-ipsum/{amount?}", function($amount = "2")
{
	$library = new Library();
	$amount = $library->lorIpsClean($amount);
	return View::make("lorem-ipsum")->with("amount", $amount);
});

Route::post("/lorem-ipsum", function()
{
	$amount = $_POST["paragraphs"];
	$library = new Library();
	$amount = $library->lorIpsClean($amount);
	return View::make("lorem-ipsum")->with("amount", $amount);
});

Route::get("/random-user", function()
{
	return View::make("random-user");
});

Route::post("/random-user", function()
{
	return "Random user info";
});

