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
            if ($task->is_active = 1) {
                $task->is_active = 0;
                $task->save();

            }else{
                $task = 1;

            }


        return redirect('/');

    }

}
