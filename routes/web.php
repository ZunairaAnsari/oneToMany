<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UzerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/users', UzerController::class);
Route::resource('/posts', PostController::class);

Route::resource('/student', StudentController::class);

Route::get('/contact', [ContactController::class, 'show']);