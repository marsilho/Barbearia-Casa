<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\models\dash\servico as DashServico;
use App\Models\Categoria;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

    // public function indexServico()
    // {
    //     $servicos = Servico::orderby('nome_servico')
    //         ->get();

    //     return view('admin.servicos.index', compact('servicos'));
    // }

    public function indexServico()
    {
        $servicos = Servico::orderby('nome_servico')->get();
        $categorias = Categoria::where('status_categoria', 'ATIVO')->get();

        return view('admin.servicos.index', compact('servicos', 'categorias'));
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

        $fotoServico->move(public_path('felsk/img/servicos'), $nomeFoto);

        Servico::create([
            'nome_servico'      => $request->nome_servico,
            'id_categoria'      => $request->id_categoria,
            'descricao_servico' => $request->descricao_servico,
            'foto_servico'      => 'servicos/' . $nomeFoto,
            'status_servico'    => $request->status_servico,
        ]);

        return redirect()
            ->route('admin.servicos.index')
            ->with('success', 'Serviço cadastrado com sucesso!');
    }

    // --------- Atualizar -----------
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_servico'      => 'required|string|max:50',
            'descricao_servico' => 'required|string',
            'status_servico'    => 'required|in:ATIVO,INATIVO',
        ]);

        $servico = Servico::findOrFail($id);

        $servico->update([
            'nome_servico'      => $request->nome_servico,
            'descricao_servico' => $request->descricao_servico,
            'status_servico'    => $request->status_servico,
        ]);

        return redirect()
            ->route('admin.servicos.index')
            ->with('success', 'Serviço atualizado com sucesso!');
    }

    // --------- Ativar -----------
    public function ativar($id)
    {
        $servico = Servico::findOrFail($id);

        $servico->update([
            'status_servico' => 'ATIVO',
        ]);

        return redirect()
            ->route('admin.servicos.index')
            ->with('success', 'Serviço ativado com sucesso!');
    }

    // --------- Desativar -----------
    public function desativar($id)
    {

        $servico = Servico::findOrFail($id);

        $servico->update([
            'status_servico' => 'INATIVO',
        ]);

        return redirect()
            ->route('admin.servicos.index')
            ->with('success', 'Serviço desativado com sucesso!');
    }
}
