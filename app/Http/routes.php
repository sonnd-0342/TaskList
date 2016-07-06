<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
	return view('tasks');
});

/**
 * Add New Task
 */
Route::post('/task', function (Request $request){
	//
});

/**
 * Delete Task
 */
Route::delete('/task/{task}', function (Task $task) {
	//
});


