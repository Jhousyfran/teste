<?php

namespace App\Models\Traits;

trait ArquivoCSV {
    
    public function importar($arquivo)
    {
        $quantidadeColunas = $this::COLUNAS;
        $lerArquivo = fopen($arquivo, 'r');
        $colunas = [];
        $i = 0;

        while ($linha = fgetcsv($lerArquivo, 1000, ";")) {

            if ($i >= 1) {
                
                $campos = [];
                for ($count = 0; $count < $quantidadeColunas; $count++) {
                    $campo = $colunas[0][$count];
                    $campos[$campo] = utf8_encode($linha[$count]);
                }
            //dd($campos);
                $this->create($campos);

            } else {
                $colunas[$i] = $linha;
            }

            //dd($colunas);
            $i++;
        }

    }
}