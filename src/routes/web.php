<?php

use App\Http\Controllers\site\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\HomeController;


Route::get('/', [HomeController::class, 'home'])->name('home');

// Página Contato

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
