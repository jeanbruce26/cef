<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntervencionesNic;

class IntervencionesNicController extends Controller
{
    public function index()
    {
    	$nic = IntervencionesNic::orderBy('idIntervenciones_Nic','ASC')->paginate();
    	return view('IntervencionesNic.index', compact('nic'));
    }
}
