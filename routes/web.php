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

Route::get('/', function (Request $request) {
    $tasks = \App\Models\Task::all();
    return view('tasks', [
        'tasks' => $tasks
    ]);
});
//get это то что видит пользователь (оставлем всё сюда для пользователя)
Route::get ('/task', function (Request $request){

});
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

Route::delete('/task/{task}', function (\App\Models\Task $task) {

    $task->delete();

    return redirect('/');
});
/*
 *  Этот коммент на несколько строк , позволяет ещё дропать весь код что ниже
 */