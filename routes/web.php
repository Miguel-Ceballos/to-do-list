<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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

Route::get('/admin/tasks/create', [TaskController::class, 'create'])->name('create-task');
Route::post('/admin/tasks/create', [TaskController::class, 'store']);

Route::get('/admin/pages/index', [PageController::class, 'index']);
Route::get('/admin/pages/create', [PageController::class, 'create'])->name('create-page');
Route::post('/admin/pages/create', [PageController::class, 'store']);

Route::get('/register/create', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('home', [TaskController::class, 'index'])->name('task.index');

Route::get('/sessions/login', [SessionsController::class, 'index'])->name('login');
Route::post('/sessions/login', [SessionsController::class, 'store']);
