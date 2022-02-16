<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
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

// Products Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');

Route::get('/products/new', [ProductController::class, 'create'])->name('products.new');

Route::get('/products/remove/{id}', [ProductController::class, 'remove'])->name('products.remove');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::patch('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


// Tags Routes


Route::get('/tags', [TagController::class, 'index'])->name('tags.index');

Route::get('/tags/new', [TagController::class, 'create'])->name('tags.new');

Route::get('/tags/remove/{id}', [TagController::class, 'remove'])->name('tags.remove');

Route::get('/tags/{id}', [TagController::class, 'show'])->name('tags.show');

Route::get('/tags/edit/{id}', [TagController::class, 'edit'])->name('tags.edit');

Route::post('/tags/store', [TagController::class, 'store'])->name('tags.store');

Route::patch('/tags/update/{id}', [TagController::class, 'update'])->name('tags.update');

Route::delete('/tags/destroy/{id}', [TagController::class, 'destroy'])->name('tags.destroy');