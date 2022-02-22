<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');

Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/posts', [PostController::class, 'index'])->name('index');
    Route::get('/post/{post}', [PostController::class, 'show'])->name('posts.show');

    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::get('/comment/{comment}', [CommentController::class, 'show'])->name('comments.show');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('users.show');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
