<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/article', [ArticleController::class, 'index']);
Route::get('/session', [SessionController::class, 'index']);
