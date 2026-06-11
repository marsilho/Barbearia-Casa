<?php

use App\Http\Controllers\admin\DashController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\HomeController;

// Site
Route::get('/', [HomeController::class, 'home'])->name('home');


// Admin
Route::get('/', [DashController::class, 'index'])->name('dash');