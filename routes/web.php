<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::except('/api/*');

Route::resource('/api/posts', \App\Http\Controllers\PostController::class);

