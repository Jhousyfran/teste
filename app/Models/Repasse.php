<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repasse extends Model
{
    use Traits\ArquivoCSV;

    protected $primaryKey = 'intrepasseid';
    protected $table = 'tblrepasse';
    public $timestamps = false;

    protected $fillable = [
        "codigo_imovel",
        "tipo_repasse",
        "codigo_caixa_escolar",
        "ano_parcela",
        "nivel_ensino",
        "etapa_ensino",
        "descricao_repasse",
        "numero_parcela",
        "valor",
        "numero_processo",
        "ano_processo"
    ];

    const COLUNAS = 11;
}
