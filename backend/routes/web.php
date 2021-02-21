<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'users' => UserController::class,
    'posts' => PostController::class,
]);