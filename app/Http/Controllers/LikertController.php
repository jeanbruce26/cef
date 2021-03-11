<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likert;
use App\Models\ObjetivoNoc;
use App\Models\SubObjetivoNoc;
use DB;

class LikertController extends Controller

{
    


 public function index2($iddiag,$idfamili){
    	

    	
		$obj = ObjetivoNoc::all();
		$sub = SubObjetivoNoc::all();


		return view('Encuesta.likert2', compact('obj','iddiag','sub','idfamili'));
    }



public function save(Request $request){

    // dd($request->all());

    $idfamilia=  $request->input('idfamilia');
    $iddiag=  $request->input('iddiag');
    $da=  $request->input('lol');
    $on=  $request->input('on');
    $subon=  $request->input('sub_on');

    $data = [];

    foreach ($on as $i => $v) {
        $data[] = array(
            'subobjetivosnoc_idSub_Objetivos_Noc' => $subon[$i],
            'familia_idFamilia' => $idfamilia,
            'id_diag' =>  $iddiag,
            'objetivonoc_idObjetivo_Noc' => $on[$i],
            'valor' => $da[$i]
        );
    }
    DB::table('evaluacion1')->insert($data); 
     return redirect()->route('pre-evaluacion', [$iddiag,$idfamilia]);
    
        
    }




public function index3($iddiag,$idfamilia){
        

        
        $obj = ObjetivoNoc::all();
        $sub = SubObjetivoNoc::all();


         return redirect()->route('post-evaluacion', [$iddiag,$idfamilia]);
    }





}
