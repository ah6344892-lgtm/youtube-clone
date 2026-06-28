<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [HomeController::class, 'activeCategory'])->name('activeCategory');
Route::get('shorts', [HomeController::class, 'shorts'])->name('shorts');
