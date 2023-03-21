<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/hello', function () {
    $data = "Test Data";
    return view('Hello', compact("data"));
});

Route::get('/tasks', function () {
    $tasks = ["todo1","todo2","todo3"];
    return view('tasks', compact("tasks"));
});