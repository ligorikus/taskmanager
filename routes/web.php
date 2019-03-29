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

    Route::get('profile', function () {
    // Только аутентифицированные пользователи могут зайти...
    })->middleware('auth');

    Route::get('request',['middleware' => 'auth', 'uses' => 'PostController@request'])->name('task.add');

    Route::delete('/{task}', ['middleware' => 'auth', 'uses' =>'PostController@destroy'])->name('task.delete');

    Route::post('/check/{task}', ['middleware' => 'auth', 'uses' =>'PostController@check_box'])->name('task.status');

    Route::get('/',['middleware' => 'auth', 'uses' =>'PostController@view_all']);
    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

