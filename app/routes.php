<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
|| and give it the Closure to execute when that URI is requested.
Testing 123
|
*/

Route::get('/','TasksController@home');
Route::get('/create','TasksController@create');
Route::get('/edit','TasksController@edit');
Route::get('/delete','TasksController@delete');
// listen for when we POST to the create page and then call saveCreate action in the TasksController to handle the form.
Route::post('/create', 'TasksController@saveCreate');

