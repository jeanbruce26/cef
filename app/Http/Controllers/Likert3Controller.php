<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntervencionesNic;
use App\Models\SubObjetivoNoc;
use App\Models\ObjetivoNoc;
use App\Models\Evaluacion1;
use DB;

class Likert3Controller extends Controller
{
    public function index($iddiag,$idfamili)
    {
    	$nic = IntervencionesNic::all();
    	$sub = SubObjetivoNoc::all();
    	$obj = ObjetivoNoc::all();
		

    	return view('Encuesta.likert3', compact('nic','iddiag','idfamili','sub','obj'));
    }





    public function save(Request $request){



    $idfamilia=  $request->input('idfamilia');
    $iddiag=  $request->input('iddiag');
    $da=  $request->input('lol');
    $on=  $request->input('on');
    $subon=  $request->input('sub_on');


    foreach ($da as $i => $v) {

        $eval1 = Evaluacion1::where('subobjetivosnoc_idSub_Objetivos_Noc', $subon[$i])
                ->where('familia_idFamilia', $idfamilia)
                ->where('objetivonoc_idObjetivo_Noc', $on[$i])
                ->first();

        $eval1->valor2 = $da[$i];
        $eval1->save();

    }
    
    return redirect()->route('general', [$idfamilia]);
    
        
    }


    public function index3($iddiag,$idfamilia){
        

        
        $obj = ObjetivoNoc::all();
        $sub = SubObjetivoNoc::all();


         return redirect()->route('/diagnostico', [$iddiag]);
    }
}
