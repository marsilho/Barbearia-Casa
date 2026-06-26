<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Contato extends Model
{
    protected $table = 'tbl_contatos';
    protected $primaryKey = 'id_contato';
    public $timestamps = false;

    protected $fillable = [
        'nome_contato',
        'email_contato',
        'telefone_contato',
        'assunto_contato',
        'mensagem_contato'
    ];


}