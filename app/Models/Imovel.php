<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use Traits\ArquivoCSV;

    protected $primaryKey = 'codigo';
    protected $table = 'tblimovel';
    public $timestamps = false;

    public $fillable = [
        "codigo", "codigo_mae", "regional","cidade","inep","anexo","descricao","nome", " modalidade", "situacao",
        "ocupacao","educacao_infantil_presencial","anos_finais_presencial","ensino_medio_presencial",
        "educacao_profissional_presencial","eja_presencial","eja_semipresencial","magisterio_ead","eja_ead",
        "educacao_presencial_ead","total_escolarizacao", "cep","logradouro","numero","complemento","bairro",
        "data_cadastro","ultima_atualizacao","latitude"
    ];

    const COLUNAS = 32;

    public function gestores(){
        return $this->hasMany(Gestor::class, 'codigo_imovel', 'codigo');
    }

    public function tercerizados()
    {
        return $this->hasMany(Tercerizado::class, 'codigo_imovel', 'codigo');
    }

    public function getGastosLimpezaAttribute()
    {

        $contratos = Tercerizado::where('tipo', 'LIMPEZA')->where('codigo_imovel',$this->codigo)->get();
        $gastos = 0;
        
        foreach ($contratos as $contrato) {
            $valor = 0;
            $valor = $contrato->quantidade * $contrato->valor_unitario;
            $gastos += $valor;
        }

        return $gastos;
    }

    public function getGastosVigilanciaAttribute()
    {

        $contratos = Tercerizado::where('tipo', 'VIGILANCIA')->where('codigo_imovel', $this->codigo)->get();
        $gastos = 0;

        foreach ($contratos as $contrato) {
            $valor = 0;
            $valor = $contrato->quantidade * $contrato->valor_unitario;
            $gastos += $valor;
        }

        return $gastos;
    }

    public function getGastosMerendeiraAttribute()
    {

        $contratos = Tercerizado::where('tipo', 'MERENDEIRA')->where('codigo_imovel', $this->codigo)->get();
        $gastos = 0;

        foreach ($contratos as $contrato) {
            $valor = 0;
            $valor = $contrato->quantidade * $contrato->valor_unitario;
            $gastos += $valor;
        }

        return $gastos;
    }

    public function getRepasseManutencaoAttribute()
    {

        $contratos = Repasse::where('tipo_repasse', 'MANUTENCAO')->where('codigo_imovel', $this->codigo)->get();
        $repasse = 0;

        foreach ($contratos as $contrato) {
            $valor = 0;
            $valor = $contrato->numero_parcela * $contrato->valor;
            $repasse += $valor;
        }
        return $repasse;
    }

    public function getRepassePagamentosTerceirosAttribute()
    {

        $contratos = Repasse::where('tipo_repasse', 'PAGAMENTO TERCEIROS')->where('codigo_imovel', $this->codigo)->get();
        $repasse = 0;

        foreach ($contratos as $contrato) {
            $valor = 0;
            $valor = $contrato->numero_parcela * $contrato->valor;
            $repasse += $valor;
        }
        return $repasse;
    }

    public function getRepasseOutrosAttribute()
    {

        $contratos = Repasse::where('tipo_repasse', 'OUTROS')->where('codigo_imovel', $this->codigo)->get();
        $repasse = 0;

        foreach ($contratos as $contrato) {
            $valor = 0;
            $valor = $contrato->numero_parcela * $contrato->valor;
            $repasse += $valor;
        }
        return $repasse;
    }

}
