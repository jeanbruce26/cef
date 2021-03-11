<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDiagnostico;

class TipoDiagnosticoController extends Controller
{
    public function index()
    {
    	$tipodiagnostico = TipoDiagnostico::orderBy('idTipo_Diagnostico','ASC')->paginate();
    	return view('TipoDiagnostico.index', compact('tipodiagnostico'));
    }
}
