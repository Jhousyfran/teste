<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel as ImovelModel;

class Imovel extends Controller
{
    public function listar(Request $request)
    {      
        return ['imoveis' => ImovelModel::all()]; 
    }

    public function obter(Request $request, ImovelModel $imovel)
    {
        $imovel->load('gestores', 'tercerizados');
        
        return [
            'imovel' => $imovel,
            'gastos_limpeza' => $imovel->gastosLimpeza,
            'gastos_vigilancia' => $imovel->gastosVigilancia,
            'gastos_merendeira' => $imovel->gastosMerendeira,
            'repasse_manutencao' => $imovel->repasseManutencao,
            'repasse_pagamentos_terceiros' => $imovel->repassePagamentosTerceiros,
            'repasse_outros' => $imovel->repasseOutros,
        ];
    }
}
