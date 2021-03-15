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

// ゲストログイン機能
Route::get('/login/guest', [App\Http\Controllers\Auth\LoginController::class, 'guestLogin']);

// ログインしていないと下記の機能が使えない
Route::middleware(['auth']) -> group(function () {

    // ログインしていないとPostに関するRESTfulな機能を使えずにログイン画面に戻る
    Route::resources([
        'posts' => PostController::class,
    ]);
    // ログインしていないとお気に入りに追加した画像が見えないようにする設定
    Route::get('/posts/favorites', [App\Http\Controllers\PostController::class, 'favorites'])->name('posts.favorite');
    // ログインしていないとお気に入りに追加することができない設定
    Route::get('/posts/add_favorite/{id}', [App\Http\Controllers\PostController::class, 'add_favorite']);

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');