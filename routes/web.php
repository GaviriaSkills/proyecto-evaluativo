<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('product', [ProductoController::class, 'index'])->name('product.index');
Route::get('product/create', [ProductoController::class, 'create'])->name('product.create');
Route::get('product/{producto}', [ProductoController::class, 'show'])->name('product.show');
Route::post('product/store', [ProductoController::class, 'store'])->name('product.store');
Route::get('categoria', [CategoriaController::class, 'index'])->name('categorias.index');