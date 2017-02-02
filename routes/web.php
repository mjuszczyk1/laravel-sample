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

/**
 * Gonna make my own notes, cause rock and roll. Figure this is a good
 * starting point for the app and any app like this really.
 * one thing I wanna note is the '::' syntax. That's the 'scope resolution
 * operator.' Remember that shit from C++? Me either.. But, it's used for
 * referencing static methods and constants of a class. A static method 
 * is a method which can be called from outside the class, even when you 
 * don't have an instance of it. That's why we don't import anything for
 * Route or DB, scope resolution operator takes care of it.
 */

use App\Task;
// This makes it so we don't have to have the name space every time
// we want to use it. We can simply call
//      Task::all();
// To get all tasks instead of
//      App\Task::all();

Route::get('/', function () {

    // $tasks = DB::table('tasks')->get();
        // Laravels query builder.
        // Also could use filters like where()
        // and that stuff. 'tasks' is the name of
        // whatever table we're looking to grab from.

    $tasks = Task::all();
        // This is using eloquent. We made it through command line using
        //      php artisan make:model Task
        // This is the same command that you could use when using the 
        //      php artisan tinker 
        // command, so we could also use where() clauses and whatnot
        // a cool thing about using eloquent is you can but methods on 
        // the model. We'll do that now in Task.php
        // return $tasks; <- if just returning this, it will just display as a JSON obj
        // dd($tasks); <- bit of debugging info here, think of it as var_dump or dpm in drupal
    return view('tasks.index', [
        'tasks' => $tasks
    ]);
        // I'm not sure why compact doesn't work here... my guess is that
        // using the Task::all() method returns it in a format that compact()
        // can't deal with for whatever reason.

    // Other methods of returning:
        // return view('welcome', [
        //     'name' => 'world'
        // ]);
        // Could also be written as:
        // return view('welcome')->with('name', 'world')
        // or:
        // $name = 'World';
        // return view('welcome', compact('name'));
        // compact() function creates an array with
        // key 'name' and value of $name
});

Route::get('/tasks/{task}', function ($id) {
    // $task = DB::table('tasks')->find($id);
    // Too verbose. We can just use...:
    $task = Task::find($id);

    return view('tasks.show', compact('task'));
});

Route::get('/incomplete', function(){
    $tasks = Task::incomplete()->get();
        // Wondering what that Task::incomplete() does?? Go checkout the 
        // Model for the method and notes!!
    return view('tasks.incomplete', compact('tasks'));
});