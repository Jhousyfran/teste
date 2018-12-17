<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tercerizado;

class Contratos extends Controller
{
    public function listar(Request $request)
    {
        $limpeza = new Tercerizado;
        dd($limpeza->gastos_limpeza);
        return ['imoveis' => ImovelModel::all()];
    }

    /**
    public function obter(Request $request, ImovelModel $imovel)
    {
        $imovel->load('gestores', 'tercerizados');
        dd($imovel->tercerizados->gastosLimpeza);

        return ['imovel' => $imovel];
    }
     */
}
