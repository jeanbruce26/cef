<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnostico;

class DiagnosticoController extends Controller
{
    public function index()
    {
    	$diagnostico = Diagnostico::orderBy('idDiagnostico','ASC')->paginate();
    	return view('Diagnostico.index', compact('diagnostico'));
    }
}
