<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Upload extends Controller
{

    public function importar(Request $request){

        $fileImovel = fopen($request->imovel, 'r');

        while(($linha = fgetcsv($fileImovel, 1000, ";")) != false){
            $teste = utf8_encode($linha[0]);
            $teste2 = utf8_encode($linha[1]);

            dd($teste2);
        }

    }
}
