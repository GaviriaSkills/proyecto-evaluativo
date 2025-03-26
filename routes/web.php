<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('product', [ProductoController::class, 'index'])->name('product.index');

Route::get('product/create', [ProductoController::class, 'create'])->name('product.create');

Route::get('product/{producto}', [ProductoController::class, 'show'])->name('product.show');

Route::post('product/store', [ProductoController::class, 'store'])->name('product.store');

Route::get('product/edit/{producto}', [ProductoController::class, 'edit'])->name('product.edit');

Route::patch('product/{producto}', [ProductoController::class, 'update'])->name('product.update');

Route::delete('product/{producto}', [ProductoController::class, 'destroy'])->name('product.delete');

Route::get('categoria', [CategoriaController::class, 'index'])->name('categorias.index');

Route::get('categoria/create', [CategoriaController::class, 'create'])->name('categorias.create');

Route::get('categoria/{categoria}', [CategoriaController::class, 'show'])->name('categorias.show');

Route::post('categoria/store', [CategoriaController::class, 'store'])->name('categorias.store');

Route::get('categoria/edit/{categoria}', [CategoriaController::class, 'edit'])->name('categorias.edit');

Route::patch('categoria/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');

Route::delete('categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.delete');