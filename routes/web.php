<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\CategoriaBlogController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('articulo', [ArticulosController::class, 'index'])->name('articulos.index');

Route::get('articulo/create', [ArticulosController::class, 'create'])->name('articulos.create');

Route::get('articulo/{articulo}', [ArticulosController::class, 'show'])->name('articulos.show');

Route::post('articulo/store', [ArticulosController::class, 'store'])->name('articulos.store');

Route::get('articulo/edit/{articulo}', [ArticulosController::class, 'edit'])->name('articulos.edit');

Route::patch('articulos/{articulo}', [ArticulosController::class, 'update'])->name('articulos.update');

Route::delete('articulo/{articulo}', [ArticulosController::class, 'destroy'])->name('articulos.delete');

Route::get('categoriaBlog', [CategoriaBlogController::class, 'index'])->name('categoriaBlog.index');

Route::get('categoriaBlog/create', [CategoriaBlogController::class, 'create'])->name('categoriaBlog.create');

Route::get('categoriaBlog/{categoriaBlog}', [CategoriaBlogController::class, 'show'])->name('categoriaBlog.show');

Route::post('categoriaBlog/store', [CategoriaBlogController::class, 'store'])->name('categoriaBlog.store');

Route::get('categoriaBlog/edit/{categoriaBlog}', [CategoriaBlogController::class, 'edit'])->name('categoriaBlog.edit');

Route::patch('categoriaBlog/{categoriaBlog}', [CategoriaBlogController::class, 'update'])->name('categoriaBlog.update');

Route::delete('categoriaBlog/{categoriaBlog}', [CategoriaBlogController::class, 'destroy'])->name('categoriaBlog.delete');
Auth::routes();
