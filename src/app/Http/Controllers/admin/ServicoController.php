<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\models\dash\servico as DashServico;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

    public function indexServico()
    {
        $servicos = Servico::orderby('nome_servico')
            ->get();

        return view('admin.servicos.index', compact('servicos'));
    }

    public function storeServico(Request $request)
    {
        $request->validate([
            'nome_servico'      => 'required|string|max:50',
            'id_categoria'      => 'required|exists:tbl_categorias,id_categoria',
            'descricao_servico' => 'required|string',
            'foto_servico'      => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status_servico'    => 'required|in:ATIVO,INATIVO',
        ]);

        $fotoServico = $request->file('foto_servico');
        $nomeFoto = time() . '_' . $fotoServico->getClientOriginalName();

        $fotoServico->move(public_path('felsk/img/servicos/'), $nomeFoto);

        Servico::create([
            'nome_servico'      => $request->nome_servico,
            'id_categoria'      => $request->id_categoria,
            'descricao_servico' => $request->descricao_servico,
            'foto_servico'      => $nomeFoto,
            'status_servico'    => $request->status_servico,
        ]);

        return redirect()
            ->route('admin.servicos.index')
            ->with('success', 'Serviço cadastrado com sucesso!');
    }
}
