<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familia;
use App\Models\Racimo;
use App\Models\Religion;
use App\Models\Diagnostico;

class DatosController extends Controller
{
    public function index($id_user)
    {


    	$religion = Religion::all();
    	return view("Encuesta.datos", compact('religion','id_user'));
    }

    public function save(Request $request){

        
        
    	$input = $request->all();
 		
    	$dato = Familia::create([
    		"Familia" => $input["nombrefamilia"],
    		"Direccion" => $input["direccion"],
    		"Nun_Familiares" => $input["compofamiliar"],
    		"Ingreso_Mensual" => $input["ingresomensual"],
    		"Estado_Civil" => $input["estado"],
    		"Religion_idReligion" => $input["religion"],
            "id_user" => $input["id_user"],
    	]);

      
     
        
          return redirect()->route('familia.mostrar', [$dato->idFamilia]);

       
    
    }


    public function index2($id)
    {

        $racimo = Racimo::all();
        return view("Encuesta.encuesta",compact('racimo','id'));
    }
    
}
