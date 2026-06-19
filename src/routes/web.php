<?php

use App\Http\Controllers\admin\DashController;
use App\Http\Controllers\admin\ServicoController;
use App\Http\Controllers\admin\ClientesController;
use App\Http\Controllers\admin\CalendarioController;
use App\Http\Controllers\admin\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\HomeController;

// Site
Route::get('/', [HomeController::class, 'home'])->name('home');


// Admin Dashboard   //prefix -- qualquer nome vai ter o admin.seuArquivo
Route::prefix('admin')->name('admin.')->group(function () {

    // Pg Clientes Dashboard
    Route::get('/clientes', [ClientesController::class, 'indexCliente'])->name('clientes.index');

    // Pg Serviços Dashboard
    Route::get('/servicos', [ServicoController::class, 'indexServico'])->name('servicos.index');

    // Pg Calendario Dashboard
    Route::get('/calendario', [CalendarioController::class, 'indexCalendario'])->name('calendario.index');

    // Pg Categorias Dashboard
    Route::get('/categoria', [CategoriaController::class, 'indexCategoria'])->name('categorias.index');

    

    Route::middleware('auth:admin')->group(function () {

        Route::get('/', [DashController::class, 'index'])->name('dash');

        // Modal Categorias: Desativar
        Route::patch('/categorias/{id}/desativar', [CategoriaController::class, 'desativar'])->name('categoria.desativar');

        // Modal Categorias: Ativar
        Route::patch('/categorias/{id}/ativar', [CategoriaController::class, 'ativar'])->name('categoria.ativar');

        // Modal Categorias: Editar
        Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
    });
});
