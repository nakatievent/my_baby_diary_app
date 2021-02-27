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

Route::resources([
    'users' => UserController::class,
    'posts' => PostController::class,
]);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');