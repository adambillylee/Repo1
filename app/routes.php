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
	$Cities = City::all();

	return View::make('/city/city-index')
		->with('cities', $Cities);
});

//Cross Site Request Forgery
Route::filter('csrf', function()
{
    if (Request::forged()) return Response::error('500');
});

//Link route resources
Route::resource('user', 'UserController');
Route::resource('city', 'CityController');

//Test Layouts
Route::get('about', function()
{
	return View::make('pages.about');
});
Route::get('projects', function()
{
	return View::make('pages.projects');
});
Route::get('contact', function()
{
	return View::make('pages.contact');
});





