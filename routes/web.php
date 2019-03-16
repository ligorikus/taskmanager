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

    Route::post('/', ['middleware' => 'auth', 'uses' =>'PostController@check_box'])->name('task.status');

    Route::get('/', function (Request $request) {
    $tasks = \App\Models\Task::all();
    return view('tasks', [
        'tasks' => $tasks
    ]);
});

/* стереть тут

//post это для добавления данных, защищенный протокол
Route::post('/task', function (Request $request) {
    $task = new \App\Models\Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

/**
 * Удалить задачу
 */
// delete для удаленния данных с сервера




/*

Route::delete('/task/{task}', function (\App\Models\Task $task) {

    $task->delete();

    return redirect('/');
});

/*
 *  Этот коммент на несколько строк , позволяет ещё дропать весь код что ниже
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
