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

// Route::group(['middleware' => 'auth'], function() {
//     Route::resources([
//         'posts' => PostController::class,
//     ]);
//  });

Route::middleware(['auth']) -> group(function () {
    Route::resources([
        'posts' => PostController::class,
    ]);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');