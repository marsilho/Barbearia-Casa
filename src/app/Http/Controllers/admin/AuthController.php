<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function login()
    {

        return view('admin.auth.login');
    }

    public function autenticar(Request $request)
    {
        // dd($request);
        $request->validate([
            'email_usuario' => 'required|email',
            'senha_usuario' => 'required',
        ]);

        // Credenciais precisas para o usuario ou funcionario logar no sistema:
        $user = [
            'email_usuario' => $request->email_usuario,
            'password' => $request->senha_usuario,
            'status_usuario' => 'ATIVO'
        ];
        // dd($user);
        if (Auth::guard('admin')->attempt($user, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->route('admin.dash');
        }

        return back()->withInput()->with('errors', 'E-mail ou senha invalido');
    }

    public function logout(Request $request)
    {

        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
