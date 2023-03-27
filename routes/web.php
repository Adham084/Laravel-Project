<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/hello', function () {
    return view('Hello');
});

Route::get('/about', function () {
    $name  = 'Asd';
    return view('About', compact('name'));
});

Route::post('/about', function () {
    $name  = $_POST['name'];
    return view('About', compact('name'));
});

Route::get('/tasks', function () {
    $tasks  = ['Task 1', 'Task 2', 'Task 3'];
    return view('Tasks', compact('tasks'));
});

Route::get('/tasks-db', function () {
    $tasks  = DB::table('tasks')->get();
    return view('TasksDB', compact('tasks'));
});

Route::get('/tasklist', function () {
    $tasks  = DB::table('tasks')->get();
    return view('TaskList', compact('tasks'));
});

Route::post('/add', function () {
    DB::table('tasks')->insert([
        'id' => 4,
        'name' => $_POST['name'],
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return redirect()->back();
});

Route::post('/delete', function () {
    DB::table('tasks')->where('id', $_POST['id'])->delete();
    return redirect()->back();
});
