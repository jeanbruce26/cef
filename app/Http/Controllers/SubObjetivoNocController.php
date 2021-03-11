<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubObjetivoNoc;

class SubObjetivoNocController extends Controller
{
    public function index()
    {
    	$sub = SubObjetivoNoc::orderBy('idSub_Objetivos_Noc','ASC')->paginate();
    	return view('SubObjetivoNoc.index', compact('sub'));
    }
}
