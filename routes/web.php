<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use \Illuminate\Http\Request;
use \App\User;

Route::get('/', function (Request $request) {
    dd(User::all()->toArray());
    return view('welcome');
});
