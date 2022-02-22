<?php

use App\Http\Controllers\API\CommentAPIController;
use App\Http\Controllers\API\PostAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('posts.')->group(function (){
    Route::get('posts', [PostAPIController::class, 'index'])->name('index');
    Route::get('post/{post}', [PostAPIController::class, 'show'])->name('show');
    Route::post('posts', [PostAPIController::class, 'store'])->name('store');
    Route::put('post/{post}', [PostAPIController::class, 'update'])->name('update');
    Route::delete('post/{post}', [PostAPIController::class, 'destroy'])->name('destroy');
});

Route::name('comments.')->group(function (){
    Route::get('comments', [CommentAPIController::class, 'index'])->name('index');
    Route::get('comment/{comment}', [CommentAPIController::class, 'show'])->name('show');
    Route::post('comments/{post}', [CommentAPIController::class, 'store'])->name('store');
    Route::put('comment/{comment}', [CommentAPIController::class, 'update'])->name('update');
    Route::delete('comment/{comment}', [CommentAPIController::class, 'destroy'])->name('destroy');
});
