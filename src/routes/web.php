<?php

use App\Http\Controllers\admin\DashController;
use App\Http\Controllers\admin\ServicoController;
use App\Http\Controllers\admin\ClientesController;
use App\Http\Controllers\admin\CalendarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\HomeController;

// Site
Route::get('/', [HomeController::class, 'home'])->name('home');



// Admin
Route::get('/admin', [DashController::class, 'index'])->name('dash');

// Pg Clientes Dashboard
Route::get('/clientes', [ClientesController::class, 'indexCliente'])->name('admin.clientes.index');

// Pg Serviços Dashboard
Route::get('/servicos', [ServicoController::class, 'indexServico'])->name('admin.servicos.index');

// Pg Calendario Dashboard
Route::get('/calendario', [CalendarioController::class, 'indexCalendario'])->name('admin.calendario.index');