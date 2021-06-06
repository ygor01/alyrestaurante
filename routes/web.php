<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Principalcontroller::class, "index"]);

Route::get('/cardapio', [\App\Http\Controllers\Principalcontroller::class, "cardapio"]);

Route::get('/depoimento', [\App\Http\Controllers\Principalcontroller::class, "depoimento"]);

Route::get('/sobre', function () {
    return view('sobre');
});

Route::post('/envia_depoimento', [\App\Http\Controllers\Principalcontroller::class, "depoimento_store"]);

Route::get('/agradecimento', function () {
    return view('success');
});

Route::get('/erro', function () {
    return view('404');
});

Route::get('/contato', function () {
    return view('contato');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/novo', [App\Http\Controllers\HomeController::class, 'new'])->name('cardapio.new');
Route::post('/cadastra', [App\Http\Controllers\HomeController::class, 'store'])->name('cardapio.store');
Route::get('/editar/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('cardapio.editar');
Route::post('/atualiza', [App\Http\Controllers\HomeController::class, 'update'])->name('cardapio.update');
Route::get('/remover/{id_produto}', [App\Http\Controllers\HomeController::class, 'delete'])->name('cardapio.remover');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
