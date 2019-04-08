<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        return view('users', [
            'users' => User::all()
        ]);
    }

    public function user(Request $request, User $user)
    {
        return view('tasks', [
            'tasks' => $user->tasks,
            'is_admin' => true
        ]);
    }

}
