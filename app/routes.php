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


// Route group is for API versioning
Route::group(array('prefix' => 'api/v1'), function()
{
	// Route::resource registers the Todo REST routes (TodosController)
    Route::resource('todos', 'TodosController',
    	// 'create' and 'edit' forms are not relevant for the API
    	array('except' => array('create', 'edit')));
});


// Initial route that contains the initial HTML code
Route::get('/', function()
{
	return View::make('home');
});