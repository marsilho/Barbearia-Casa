<?php

use App\Http\Controllers\site\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\HomeController;
use App\Http\Controllers\site\ServicosController;
use App\Http\Controllers\site\SobreController;

// Site

// ========== HOME ================
Route::get('/', [HomeController::class, 'home'])->name('home');

// ========= PÁGINA CONTATO =========

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

// Rota para enviar o formulário de contato
Route::post('/contato', [ContatoController::class, 'enviar'])->name('duvidas.enviar');

// Página Sobre
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');

// Página Serviços
Route::get('/servicos', [ServicosController::class, 'index'])->name('servicos');






use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashController;
use App\Http\Controllers\admin\ServicoController;
use App\Http\Controllers\admin\ClientesController;
use App\Http\Controllers\admin\CalendarioController;
use App\Http\Controllers\admin\CategoriaController;



// Admin Dashboard   //prefix -- qualquer nome vai ter o admin.seuArquivo
Route::prefix('admin')->name('admin.')->group(function () {


    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'autenticar'])->name('login.autenticar');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {

        // NAVEGAÇÃO SIDE-BAR
        // pg inicial
        Route::get('/', [DashController::class, 'index'])->name('dash');
        // Pg Clientes Dashboard
        Route::get('/clientes', [ClientesController::class, 'indexCliente'])->name('clientes.index');

        // Pg Serviços Dashboard
        Route::get('/servicos', [ServicoController::class, 'indexServico'])->name('servicos.index');

        // Pg Calendario Dashboard
        Route::get('/calendario', [CalendarioController::class, 'indexCalendario'])->name('calendario.index');

        // Pg Categorias Dashboard
        Route::get('/categoria', [CategoriaController::class, 'indexCategoria'])->name('categorias.index');
        // -----------------------------

        // ROTAS DE CATEGORIAS
        // Modal Categorias: Criar
        Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');

        // Modal Categorias: Desativar
        Route::patch('/categorias/{id}/desativar', [CategoriaController::class, 'desativar'])->name('categorias.desativar');

        // Modal Categorias: Ativar
        Route::patch('/categorias/{id}/ativar', [CategoriaController::class, 'ativar'])->name('categorias.ativar');

        // Modal Categorias: Editar
        Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
        // -------------------------------


        // ROTAS DE SERVIÇOS
        // Route::post('/produtos', [ProdutoDashController::class, 'storeProduto'])->name('produto.store');

        // Modal Serviços: Criar
        Route::post('/servicos', [ServicoController::class, 'storeServico'])->name('servicos.store');

        // Modal Serviços: Desativar
        Route::patch('/servicos/{id}/desativar', [ServicoController::class, 'desativar'])->name('servicos.desativar');

        // Modal Serviços: Ativar
        Route::patch('/servicos/{id}/ativar', [ServicoController::class, 'ativar'])->name('servicos.ativar');

        // Modal Serviços: Editar
        Route::put('/servicos/{id}', [ServicoController::class, 'update'])->name('servicos.update');

        // ROTAS CALENDARIO
        Route::get('/calendario/eventos', [CalendarioController::class, 'eventos'])
            ->name('calendario.eventos');

        Route::post('/calendario/agendar', [CalendarioController::class, 'store'])
            ->name('calendario.store');
    });
});
