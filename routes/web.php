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

Route::get('/erro', function () {
    return view('404');
});

Route::get('/contato', function () {
    return view('contato');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
