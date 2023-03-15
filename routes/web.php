<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\Blog\BlogController::class, 'index'])->name('blog.home');

Route::group(['prefix' => 'blog'], function() {
    Route::get('/observatorio', [App\Http\Controllers\Blog\BlogController::class, 'index'])->name('blog.observatorio');
    Route::get('/biblioteca', [App\Http\Controllers\Blog\BlogController::class, 'index'])->name('blog.biblioteca');
    Route::get('/contato', [App\Http\Controllers\Blog\BlogController::class, 'index'])->name('blog.contato');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
});

