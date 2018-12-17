<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    use Traits\ArquivoCSV;

    protected $primaryKey = 'intgestorid';
    protected $table = 'tblgestor';
    public $timestamps  = false;

    public $fillable = [
        "codigo_imovel",
        "tipo_eleito",
        "cargo",
        "situacao_cargo",
        "matricula",
        "nome",
        "cpf",
        "telefone",
        "celular",
        "celular2",
        "email"
    ];

    const COLUNAS = 11;

}
