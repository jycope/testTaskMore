<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
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

// Route::get('categories', [CategoryController::class, 'index']);

Route::resource('categories', CategoryController::class);
Route::resource('categories.product', ProductController::class);

Route::get('categories/{category}/create', [SubCategoryController::class, 'create'])->name('categories.category.create');
Route::get('categories/{category}/edit', [SubCategoryController::class, 'edit'])->name('categories.category.edit');
Route::post('categories/{category}', [SubCategoryController::class, 'store'])->name('categories.category.store');
Route::put('categories/{category}', [SubCategoryController::class, 'update'])->name('categories.category.update');

// Route::resource('categories.category', SubCategoryController::class);s