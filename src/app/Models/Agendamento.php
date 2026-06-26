<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'tbl_agendamentos';
    protected $primaryKey = 'id_agendamento';

    const CREATED_AT = 'criado_em_agendamento';
    const UPDATED_AT = 'atualizado_em_agendamento';

    protected $fillable = [
        'id_cliente',
        'data_agendamento',
        'hora_agendamento',
        'valor_agendamento',
    ];
}
