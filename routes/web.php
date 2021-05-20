<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;


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

Route::middleware('auth')->group(function(){
	Route::get('/', [HomeController::class, 'index'])->name('home');
	Route::get('/posts', [PostController::class, 'index'])->name('posts');
	Route::post('/posts', [PostController::class, 'store'])->name('posts.add');	
	
	Route::get('/logout', LogoutController::class)->name('logout');
	
	Route::get('/users/{user}/profile', [UserProfileController::class, 'show'])->name('user.profile');
	
	Route::get('/posts/{post}/likes', [PostLikeController::class, 'show'])->name('posts.show');
	Route::patch('/posts/{post}/likes', [PostLikeController::class, 'update'])->name('posts.likes');
	Route::delete('/posts/{post}/likes', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/login', [LoginController::class, 'store'])->name('login.add');
Route::post('/register', [RegisterController::class, 'store'])->name('register.add')->middleware('v_register');

Route::fallback(function(){
	return view('errors.404');
});