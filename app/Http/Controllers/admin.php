<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function view_users(Request $request)
    {

        $request =  auth()->admin_status(1)->user;
        return view('users', [

            'users' => $request]);

    }

}
