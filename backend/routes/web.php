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
]);

// ログインしていないとPostに関するRESTfulな機能を使えずにログイン画面に戻る
Route::middleware(['auth']) -> group(function () {
    Route::get('/posts/favorites', [App\Http\Controllers\PostController::class, 'favorites'])->name('posts.favorite');
    Route::resources([
        'posts' => PostController::class,
    ]);
    Route::get('/posts/add_favorite/{id}', [App\Http\Controllers\PostController::class, 'add_favorite']);


});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');