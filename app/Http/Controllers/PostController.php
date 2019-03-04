<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PostController extends Controller
{
    public function request(Request $request)
    {
        $task = new \App\Models\Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }

    public function delete($id)
    {

        $task->delete();

        return redirect('/');

    }
}
