<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [productController::class, 'index'])->name('product.index');
Route::get('/product/create', [productController::class, 'create'])->name('product.create');
Route::post('/product', [productController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [productController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [productController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [productController::class, 'destroy'])->name('product.destroy');