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
use App\Models\Produto;
use App\Models\Categoria;

Route::get('/', function () {

    $produtosIndex = (new Produto)->with(['categoria'])->get();
    $categoriaIndex = (new Categoria)->with(['produto'])->get();

    return view('index', compact('produtosIndex', 'categoriaIndex'));
});

// PRODUTOS
Route::resource('produtos', 'App\Http\Controllers\ProdutosController');

// CATEGORIAS
Route::resource('categorias', 'App\Http\Controllers\CategoriasController');

// CLIENTES
Route::resource('clientes', 'App\Http\Controllers\ClientesController');

Auth::routes();

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('userHome');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('adminHome');
