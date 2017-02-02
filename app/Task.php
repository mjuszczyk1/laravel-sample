<?php

/**
 * This yung file was made with artisan:
 *    php artisan make:model Task
 * 
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * extends the Eloquent model. That's the active record implementation. Key: simplifies interaction with DB.
 * We can tinker around with laravel using:
 *     php artisan tinker
 * opens shell.
 * once in there, we can access it like
 *      App\Task::all();
 * can also use where clause like
 *      App\Task::where('id', '>', 2)->get();
 *      App\Task::pluck('body');
 *      App\Task::pluck('body')->first();
 */

class Task extends Model
{
    // query scopes
    // Two options, first is static function:
    // public static function incomplete()
    // {
    //     // Honestly, for something that's this simple, I would say that this 
    //     // method is good enough. We don't need params, we just want to return
    //     // incomplete tasks. If we wanted, I dunno, completed tasks for this
    //     // month, let's just write another function for that. That's actually
    //     // what I'll do. Maybe not month, but something similar? Sure.
    //     // Fuck that, nothing hard coded. It's for chaining, bruh.
    //     return static::where('completed', 0)->get();
    // }
    // Option two
    // Makes chaining possible. So basically, calling Task::incomplete()
    // will return all the incomplete tasks, but then you can chain onto
    // the end of that like:
    //      Task::incomplete()->where('id', '>=', 2);
    // which can be really helpful.
    public function scopeIncomplete($query) { // Task::incomplete()
        return $query->where('completed', 0);
        // Just remember with this way that in order to just return completed tasks,
        // you'll have to use get():
        //      Task::incomplete()->get();
    }
    public function isComplete() {
        return false;
    }
}
