<?php
use App\Http\Controllers\PostController;

Route::apiResource('posts', PostController::class);
Route::get('/posts', [PostController::class, 'index']); // Get all posts
Route::get('/posts/{id}', [PostController::class, 'show']); // Get a single post
Route::post('/posts', [PostController::class, 'store']); // Create a post
Route::put('/posts/{id}', [PostController::class, 'update']); // Update a post
Route::delete('/posts/{id}', [PostController::class, 'destroy']); // Delete a post