<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index ()
    {
        // Removed all comments, they can be found, at least for now
        // in the routes branch. This may get to be a little much to 
        // handle sooo when in doubt, check evernote!
        $tasks = Task::all();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    // This is an example of route model binding:
    public function show (Task $task) // this essentially does -> Task::find(wildcard);
    {
        // Binds model Task to this routel.
        return view('tasks.show', compact('task'));
    }

    public function incomplete ()
    {
        $tasks = Task::incomplete()->get();
            // Wondering what that Task::incomplete() does?? Go checkout the 
            // Model for the method and notes!!
        return view('tasks.incomplete', compact('tasks'));
    }

    public function add ()
    {
        return view('tasks.add');
    }

    public function store ()
    {
        // dd(request()->all());
        $this->validate(request(), [
            'taskTitle' => 'required'
        ]);

        // $task = new Task;
        // $task->title = request('taskTitle');
        // $task->body = request('body') ? request('body') : '';
        // $task->save();
        Task::create([
            'title' => request('taskTitle'),
            'body'  => request('taskBody') ? request('taskBody') : ''
        ]);
        // Task::create(request(['taskTitle', 'taskBody']));
        return redirect('/tasks');
    }

    public function completeTask($id)
    {
        $task = Task::find($id);
        $task->completed = true;
        $task->save();
        return redirect('/tasks');
    }

    public function redoTask($id)
    {
        $task = Task::find($id);
        $task->completed = false;
        $task->save();
        return redirect('/tasks');
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }
}
