<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Task;

class PostController extends Controller
{
    public function request(Request $request)
    {
        $task = new \App\Models\Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }

    public function check_box(Task $task)
    {
        dd($task->name);
            if ($task->is_active == true) {
                dd($task->is_active);

            $task->is_active = false;
            $task->save();

            }else{
                $task->is_active = true;
                $task->save();

            }


        return redirect('/');

    }

}
