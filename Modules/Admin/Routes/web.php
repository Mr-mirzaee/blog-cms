<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminCommentController;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\AdminTagController;
use Modules\Admin\Http\Controllers\AdminThemeController;
use Modules\Admin\Http\Controllers\AdminUserController;
use Modules\Admin\Http\Controllers\AdminPostController;
use Modules\Admin\Http\Controllers\AdminCategoryController;

Route::prefix('/admin')->middleware(['auth' , 'checkAdmin'])->group(function () {
    Route::get('/panel', [AdminController::class, 'index'])->name('admin.panel');

    Route::resource('/themes', AdminThemeController::class);
    Route::get('/themes-data', [AdminThemeController::class, 'data'])->name('themes.data');
    Route::post('/activate/themes/{theme}', [AdminThemeController::class, 'activate'])->name('themes.activate');

    Route::resource('/users', AdminUserController::class);
    Route::get('/users-data', [AdminUserController::class, 'data'])->name('users.data');

    Route::resource('/posts', AdminPostController::class);
    Route::get('/posts-data', [AdminPostController::class, 'data'])->name('posts.data');
    Route::post('/activate/posts/{post}', [AdminPostController::class, 'activate'])->name('posts.activate');

    Route::resource('/comments', AdminCommentController::class);
    Route::get('/comments-data', [AdminCommentController::class, 'data'])->name('comments.data');
    Route::post('/activate/comments/{comment}', [AdminCommentController::class, 'activate'])->name('comments.activate');

    Route::resource('/categories', AdminCategoryController::class);
    Route::get('/categories-data', [AdminCategoryController::class, 'data'])->name('categories.data');

    Route::resource('/tags', AdminTagController::class);
    Route::get('/tags-data', [AdminTagController::class, 'data'])->name('tags.data');
});