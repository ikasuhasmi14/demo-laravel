<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks', 'TasksController@index');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/{id}/edit', 'TasksController@edit');

Route::put('/tasks/{id}', 'TasksController@update');

Route::delete('/tasks/{task}', 'TasksController@destroy');
	