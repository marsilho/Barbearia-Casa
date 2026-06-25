<?php

use App\Http\Controllers\site\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\HomeController;
use App\Http\Controllers\site\ServicosController;
use App\Http\Controllers\site\SobreController;




// Página Home

Route::get('/', [HomeController::class, 'home'])->name('home');


// Página Contato
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');


// Rota para enviar o formulário de contato
Route::post('/contato', [ContatoController::class, 'enviar'])->name('duvidas.enviar');



// Página Sobre
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');

// Página Serviços
Route::get('/servicos', [ServicosController::class, 'servicos'])->name('servicos');