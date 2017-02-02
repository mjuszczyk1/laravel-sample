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

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/incomplete', 'TasksController@incomplete');
Route::get('/tasks/add', 'TasksController@add');
Route::post('/tasks', 'TasksController@store');
Route::post('/complete-task/{id}', 'TasksController@completeTask');
Route::post('/redo-task/{id}', 'TasksController@redoTask');
Route::post('/delete-task/{id}', 'TasksController@deleteTask');
Route::get('/tasks/{task}', 'TasksController@show');

