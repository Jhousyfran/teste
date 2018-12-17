<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tercerizado extends Model
{
    use Traits\ArquivoCSV;

    protected $primaryKey = 'inttercerizadoid';
    protected $table = 'tbltercerizado';
    public $timestamps = false;

    protected $fillable = [
        "inttercerizadoid",
        "codigo_imovel",
        "tipo",
        "posto_trabalho",
        "quantidade",
        "valor_unitario",
        "data_ultima_atualizacao",
    ];

    const COLUNAS = 6;

    public function getGastosLimpezaAttribute(){
        $contratos = $this::where('tipo', 'LIMPEZA')->get();
        $gastos = 0;
        foreach ($contrato as $contratos ) {
            $valor = 0;
            $valor =  $contrato->quantidade * $contrato->valor_unitario;
            $gastos += $valor;
        }

        return $gastos;
    }
}
