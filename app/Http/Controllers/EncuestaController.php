<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuesta;
use App\Models\Diagnostico;
use App\Models\Evaluacion1;
use App\Models\Racimo;
use App\Models\Dominio;
use App\Models\Clase;
use App\Models\ObjetivoNoc;
use App\Models\Familia;
use App\Models\TipoDiagnostico;
use DB;

class EncuestaController extends Controller
{
    public function index()
    {

    	$racimo = Racimo::all();
    	return view("Encuesta.encuesta",compact('racimo'));
    }


    public function save(Request $request){

        $da =  $request->input('check');
        $id =  $request->input('id');

        $will = [];

        
        foreach ($da as $id_diagnostico) {
           if(sizeof($will)>0){
                    
                if (!in_array($id_diagnostico,$will)) {         

                    array_push($will, $id_diagnostico);       
                
                    }
           }else{
             array_push($will, $id_diagnostico);
                }
          } 
    

        


        $will_insert = [];

        foreach ($will as $value => $i) {
           array_push($will_insert, ['Diagnostico_idDiagnostico'=>$will[$value], 'idfamilia' => $id]);
           
        }

        DB::table('paso1')->insert($will_insert);
    		
        return redirect('/diagnostico/'.$id);
    }

    public function index2($id)
    {
        $diag = Diagnostico::with(['tipoDiagnostico', 'clase', 'clase.dominio'])
                ->get();

        
        $exis= Evaluacion1::select('id_diag')
                ->where('familia_idFamilia',$id)
                ->distinct()
                ->get();
        
      

      
        

        $encu = Encuesta::all();
        $dom = Dominio::all();
        $cla = Clase::all();
        $dia = Diagnostico::all();
        $obj = ObjetivoNoc::all();
        $tip = TipoDiagnostico::all();
        return view("Encuesta.likert",compact('encu','dia','obj','dom','cla','tip','diag','id','exis'  ));
    }
}
