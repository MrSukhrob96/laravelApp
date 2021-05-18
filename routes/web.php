<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/posts', [PostController::class, 'index'])->name('posts')->middleware('auth');

Route::get('/login', [LoginController::class, 'signin'])->name('login');
Route::get('/regsiter', [LoginController::class, 'signup'])->name('regsiter');
Route::get('/logout', [LoginController::class, 'signout'])->name('logout');

Route::fallback(function(){
	return view('errors.404');
});