<?php

use App\Http\Controllers\NicoController;
use App\Http\Controllers\TaskController;
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

// TaskList
Route::get('/', [TaskController::class, 'list'])->name('tasks');
Route::post('/insert', [TaskController::class, 'insert'])->name('task.insert');
Route::delete('/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
Route::put('/update/{id}', [TaskController::class, 'update'])->name('task.update');

// Nico
Route::get('/index', [NicoController::class, 'index']);
Route::get('/about', [NicoController::class, 'about']);
Route::get('/blog', [NicoController::class, 'blog']);
Route::get('/contact', [NicoController::class, 'contact']);
Route::get('/repair', [NicoController::class, 'repair']);
