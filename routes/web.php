<?php

use App\Http\Controllers\RegisterController;
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
//Route::get('/', [])

Route::get('/', [TaskController::class, 'index']);

Route::get('/admin/create', [TaskController::class, 'create'])->name('create');
Route::post('/admin/create', [TaskController::class, 'store']);

Route::get('/register/create', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('home', [TaskController::class, 'index'])->name('task.index');
