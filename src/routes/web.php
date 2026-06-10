<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\HomeController;


Route::get('/', [HomeController::class, 'home'])->name('home');