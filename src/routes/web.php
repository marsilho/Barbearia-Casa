<?php

use App\Http\Controllers\admin\DashController;
use App\Http\Controllers\admin\ServicoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\HomeController;

// Site
Route::get('/', [HomeController::class, 'home'])->name('home');

// Admin
Route::get('/admin', [DashController::class, 'index'])->name('dash');

// Pg Serviços Dashboard
Route::get('/servicos', [ServicoController::class, 'indexServico'])->name('admin.servicos.index');