<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Contato extends Model
{
    protected $table = 'tbl_contatos';
    protected $primaryKey = 'id_contato';
    public $timestamps = true;

    const CREATED_AT = 'criado_em_contato';
    const UPDATED_AT = 'atualizado_em_contato';


    protected $fillable = [
        'nome_contato',
        'email_contato',
        'telefone_contato',
        'mensagem_contato'
    ];


}