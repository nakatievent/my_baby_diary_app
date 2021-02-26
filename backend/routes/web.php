<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


// トップページの表示
Route::get('/', function () {
    return view('welcome');
});

// 概要ページの表示
Route::get('/overview', function () {
    return view('overview');
});

// ログイン後の画面
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resources([
    'users' => UserController::class,
    'posts' => PostController::class,
]);