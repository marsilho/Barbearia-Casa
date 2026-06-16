<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'tbl_clientes';

    protected $primaryKey = 'id_cliente';

    public $timestamps = true;

    const CREATED_AT = 'criado_em_cliente';

    const UPDATED_AT = 'atualizado_em_cliente';

    protected $fillable = [
        'nome_cliente',
        'data_nasc_cliente',
        'email_cliente',
        'senha_cliente',
        'status_cliente'
    ];
}
