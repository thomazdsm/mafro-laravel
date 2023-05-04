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

Route::group(['prefix' => 'evento'], function () {
    Route::get('/', App\Http\Controllers\Evento\IndexController::class)->name('evento.home');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
    Route::get('/usuario', [App\Http\Controllers\Admin\User\IndexController::class, 'profile'])->name('users.profile');
    Route::get('/blog', [App\Http\Controllers\Admin\Blog\IndexController::class, 'index'])->name('admin.blog');

    Route::resource('users', \App\Http\Controllers\Admin\User\IndexController::class);
    Route::resource('posts', \App\Http\Controllers\Admin\Blog\PostController::class);
    Route::resource('categorias', \App\Http\Controllers\Admin\Blog\CategoriaController::class);
    Route::resource('biblioteca', \App\Http\Controllers\Admin\Blog\BibliotecaController::class);
    Route::resource('contato', \App\Http\Controllers\Admin\Blog\ContatoController::class);

    Route::resource('evento', \App\Http\Controllers\Admin\Evento\IndexController::class);
    Route::resource('certificado',\App\Http\Controllers\Admin\Evento\CertificadoController::class);
    Route::resource('transmissao',\App\Http\Controllers\Admin\Evento\TransmissaoController::class);
    Route::resource('tipo_transmissao',\App\Http\Controllers\Admin\Evento\TipoTransmissaoController::class);
    Route::resource('tipo_evento',\App\Http\Controllers\Admin\Evento\TipoEventoController::class);
});

