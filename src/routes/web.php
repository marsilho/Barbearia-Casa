<?php

use App\Http\Controllers\site\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\HomeController;
use App\Http\Controllers\site\ServicosController;
use App\Http\Controllers\site\SobreController;

Route::get('/', [HomeController::class, 'home'])->name('home');

// Página Contato
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

// Página Sobre
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');

// Página Serviços
Route::get('/servicos', [ServicosController::class, 'servicos'])->name('servicos');