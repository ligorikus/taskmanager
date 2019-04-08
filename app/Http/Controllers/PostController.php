<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Task;

class PostController extends Controller
{
    public function request(Request $request)
    {
        auth()->user()->tasks()->create(['name' => $request->name]);
        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }

    public function check_box(Task $task)
    {
            if ($task->is_active == true) {

            $task->is_active = false;
            $task->save();

            }else{
                $task->is_active = true;
                $task->save();

            }


        return redirect('/');

    }



    public function view_all(Request $request)
    {
        if (auth()->user()->admin_status == 1) {
            return redirect(route('admin.users'));
        }
        $request =  auth()->user()->tasks;
       return view('tasks', [

            'tasks' => $request]);

       }


}
