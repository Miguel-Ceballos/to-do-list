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

Route::get('/', \App\Http\Controllers\HomeController::class)->middleware('guest');

Route::get('/create', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionsController::class, 'index'])->name('login');
Route::post('/login', [SessionsController::class, 'store']);
Route::post('/logout', [SessionsController::class, 'destroy'])->name('logout');

Route::get('/{user:username}', [PageController::class, 'index'])->name('pages.index');
Route::get('/create', [PageController::class, 'create'])->name('create.page');
Route::post('/create', [PageController::class, 'store']);

Route::get('/{user:username}/{page:slug}', [TaskController::class, 'show']);
Route::get('/admin/tasks/create', [TaskController::class, 'create'])->name('create-task');
Route::post('/admin/tasks/create', [TaskController::class, 'store']);





