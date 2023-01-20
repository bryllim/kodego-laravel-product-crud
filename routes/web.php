<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/update', [ProductController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');