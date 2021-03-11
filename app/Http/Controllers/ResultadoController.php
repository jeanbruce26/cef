<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familia;
use App\Models\Evaluacion1;
use App\Models\SubObjetivoNoc;


class ResultadoController extends Controller
{
    public function index($idfamili)
    {
    	
		$fami = Familia::find($idfamili);
		$evalu = Evaluacion1::with(['subobjetivo','familia'])
				->where('familia_idFamilia', $idfamili)
                ->get();

                // return $evalu;

    	return view('Encuesta.resultado',compact('fami','idfamili','evalu'));
    }
}
