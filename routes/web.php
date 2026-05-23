<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/', [HomeController::class, 'store'])->name('home.store');

Route::get('/tentang', [ActivityController::class, 'index'])->name('tentang.index');
Route::post('/tentang', [ActivityController::class, 'store'])->name('tentang.store');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
