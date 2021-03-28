<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/store', [PostController::class, 'store']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::patch('/posts/{post}', [PostController::class, 'update']);

Route::delete('/posts/{post}', [PostController::class, "destroy"]);

?>
