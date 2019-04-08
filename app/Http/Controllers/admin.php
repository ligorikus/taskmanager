<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function right(Request $request)
    {

        return view('users', [

            'users' => $request]);

    }

    public function users(Request $request)
    {

        return view('users', [

            'users' => $request]);

    }

}
