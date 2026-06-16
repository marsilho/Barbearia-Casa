<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function indexCliente(){
        $cliente = Cliente::orderby('nome_cliente')
        ->get();

        return view('admin.servicos.index', compact('cliente'));
    }
}
