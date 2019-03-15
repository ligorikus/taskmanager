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

    public function check_box(App\Models\Task $request)
    {
            $task = $request->id;
            if ($task->is_active = true) {
                $task->is_active = false;
            }else{
                $task->is_active = true;
            }

        return redirect('/');

    }

}
