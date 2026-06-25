<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function contato()
    {
        return view('site.contato.contato');
    }

    public function enviar(Request $request)
    {

        // Validação dos dados do formulário
        $request->validate([
            'nome_contato' => 'required|string|max:80',
            'email_contato' => 'required|email|max:100',
            'telefone_contato' => 'nullable|string|max:20',
            'mensagem_contato' => 'required|string',
        ]);
        
         Contato::create([
            'nome_contato' => $request->nome_contato,
            'email_contato' => $request->email_contato,
            'telefone_contato' => $request->telefone_contato,
            'assunto_contato' => $request->assunto_contato,
            'mensagem_contato' => $request->mensagem_contato,
        ]); 

        // Aqui pode estar sendo processado os dados, como enviar um email ou salvar no banco de dados.

        // Redirecionar de volta para a página de contato com uma mensagem de sucesso
       return redirect()->route('duvidas.enviar')->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}