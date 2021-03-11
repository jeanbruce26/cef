<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosibleCausa;

class PosibleCausaController extends Controller
{
    public function index()
    {
    	$posiblecausa = PosibleCausa::orderBy('idPosible_Cuasa','ASC')->paginate();
    	return view('PosibleCausa.index', compact('posiblecausa'));
    }
}
