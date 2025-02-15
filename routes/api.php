<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Cors;

// Route logic
// Route::get('/posts', [PostController::class, 'index']);
// Route::post('/posts', [PostController::class, 'store'])->middleware(Cors::class);
// Route::get('/posts/{post}', [PostController::class, 'show']);
// Route::delete('/posts/{post}', [PostController::class, 'destroy']);
// Route::patch('/posts/{post}', [PostController::class, 'update'])->middleware(Cors::class);

Route::apiResource('posts', PostController::class)->middleware(Cors::class);