<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestor;
use App\Models\Imovel;
use App\Models\Tercerizado;
use App\Models\Repasse;
use Illuminate\Support\Facades\Redirect;

class Upload extends Controller
{

    public function importar(Request $request){

        /** 
        if($request->imovel){
            $imovel = new Imovel();
            $imovel->importar($request->imovel);
        }
         
        if ($request->gestor) {
            $gestor = new Gestor();
            $gestor->importar($request->gestor);

            dd($gestor);
        }
         
        if ($request->repasse) {
            $repasse = new Repasse();
            $repasse->importar($request->repasse);

            dd($repasse);
        }
         */

        if ($request->tercerizado) {
            $tercerizado = new Tercerizado();
            $tercerizado->importar($request->tercerizado);

            //dd($tercerizado);
        }

        return redirect('/');

    }
}
