<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\AuthController;
use Modules\Blog\Http\Controllers\CategoryController;
use Modules\Blog\Http\Controllers\CommentController;
use Modules\Blog\Http\Controllers\HomeController;
use Modules\Blog\Http\Controllers\PostController;

Route::get('/base', [HomeController::class, 'base'])->name('base');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts', PostController::class, [
    'as' => 'api',
    'except' => ['show']
]);
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('api.posts.show');

Route::get('/search/{text}', [HomeController::class, 'search'])->name('api.posts.search');

Route::apiResource('categories', CategoryController::class, [
    'as' => 'api'
]);

Route::middleware('auth:api')->apiResource('comments', CommentController::class, [
    'as' => 'api'
]);
Route::get('/post/comments/{post}', [CommentController::class, 'index']);