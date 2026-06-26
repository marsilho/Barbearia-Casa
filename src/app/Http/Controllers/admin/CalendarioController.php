<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    // Abre a página do calendário
    public function indexCalendario()
    {
        return view('admin.calendario.index');
    }

    // Retorna os eventos para o FullCalendar
    public function eventos()
    {
        $agendamentos = Agendamento::all();

        $eventos = [];

        foreach ($agendamentos as $agendamento) {
            $eventos[] = [
                'id' => $agendamento->id_agendamento,
                'title' => 'Cliente ' . $agendamento->id_cliente,
                'start' => $agendamento->data_agendamento . 'T' . $agendamento->hora_agendamento,
            ];
        }

        return response()->json($eventos);
    }

    // Salva um novo agendamento
    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required',
            'data_agendamento' => 'required|date',
            'hora_agendamento' => 'required',
            'valor_agendamento' => 'required|numeric',
        ]);

        Agendamento::create([
            'id_cliente' => $request->id_cliente,
            'data_agendamento' => $request->data_agendamento,
            'hora_agendamento' => $request->hora_agendamento,
            'valor_agendamento' => $request->valor_agendamento,
        ]);

        return response()->json([
            'success' => true
        ]);
    }
}
