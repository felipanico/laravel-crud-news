<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [NewsController::class, 'index'])->name('home');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news/save', [NewsController::class, 'save'])->name('news.save');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/save', [CategoryController::class, 'save'])->name('category.save');