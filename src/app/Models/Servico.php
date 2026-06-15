<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'tbl_servicos';

    protected $primaryKey = 'id_servico';

    public $timestamps = true;


    const CREATED_AT = 'criado_em_servico';

    const UPDATED_AT = 'atualizado_em_servico';

    protected $fillable = [
        'nome_servico',
        'descricao_servico',
        'foto_servico',
        'status_servico'
    ];


    // hasMany -- Tem muitos
    // public function ProdutosCategoria(){
    //     return $this->hasMany(Produto::class, 'id_categoria', 'id_categoria');
    // }
}
