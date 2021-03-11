<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ObjetivoNoc;

class ObjetivoNocController extends Controller
{
    public function index()
    {
    	$objetivonoc = ObjetivoNoc::orderBy('idObjetivo_Noc','ASC')->paginate();
    	return view('ObjetivoNoc.index', compact('objetivonoc'));
    }
}
