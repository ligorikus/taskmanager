<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        if (auth()->user()->admin_status == 1) {
            return redirect(route('adminController.users'));
        }
        $request =  auth()->user()->tasks;
        return view('tasks', [
            'tasks' => $request
        ]);
    }

    public function store(Request $request)
    {
        auth()->user()->tasks()->create(['name' => $request->name]);
        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }

    public function check(Task $task)
    {
        if ($task->is_active == true) {
            $task->is_active = false;
        } else {
            $task->is_active = true;
        }
        $task->save();

        return redirect('/');
    }
}
