<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\models\dash\servico as DashServico;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller {

    public function indexServico(){
        $servico = Servico::orderby('nome_servico')
        ->get();

        return view('admin.servicos.index', compact('servico'));
    }
}
