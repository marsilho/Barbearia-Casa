<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function indexCategoria()
    {
        $categorias = Categoria::orderby('nome_categoria')
            ->get();

        return view('admin.categorias.index', compact('categorias'));
    }

    // CRIAR
    public function store(Request $request)
    {

        $request->validate([
            // nome_categoria campos que estão localizados no name="" do formulario dentro do modal
            'nome_categoria' => 'required|string|max:30',
            'descricao_categoria' => 'required|string',
            'status_categoria' => 'required|in:ATIVO,INATIVO'
        ]);

        Categoria::create([
            'nome_categoria' => $request->nome_categoria,
            'descricao_categoria' => $request->descricao_categoria,
            'status_categoria' => $request->status_categoria
        ]);

        return Redirect()->route('admin.categorias.index')
            ->with('success', 'Categoria cadastrada com sucesso!');
    }

    // DESATIVAR
    public function desativar($id)
    {

        $categoria = Categoria::findOrFail($id);
        // dd($categoria);

        $categoria->update([
            'status_categoria' => 'INATIVO',
        ]);

        return redirect()
            ->route('admin.categorias.index')
            ->with('success', 'Categoria desativada com sucesso!');
    }


    // ATIVAR
    public function ativar($id)
    {

        $categoria = Categoria::findOrFail($id);
        // dd($categoria);

        $categoria->update([
            'status_categoria' => 'ATIVO',
        ]);

        return redirect()
            ->route('admin.categorias.index')
            ->with('success', 'Categoria ativada com sucesso!');
    }

    // ATUALIZAR
    public function update(Request $request, $id)
    {

        $request->validate([
            'nome_categoria' => 'required|string|max:30',
            'descricao_categoria' => 'required|string',
            'ordem_categoria' => 'required|integer',
            'status_categoria' => 'required|in:ATIVO,INATIVO',
        ]);

        $categoria = Categoria::findOrFail($id);

        $categoria->update([
            'nome_categoria' => $request->nome_categoria,
            'descricao_categoria' => $request->descricao_categoria,
            'ordem_categoria' => $request->ordem_categoria,
            'status_categoria' => $request->status_categoria,
        ]);

        return redirect()
            ->route('admin.categorias.index')
            ->with('success', 'Categoria atualizada com sucesso');
    }
}
