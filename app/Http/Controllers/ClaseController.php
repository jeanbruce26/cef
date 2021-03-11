<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;

class ClaseController extends Controller
{
    public function index()
    {
    	$clase = Clase::orderBy('idClase','ASC')->paginate(10);
    	return view('Clase.index', compact('clase'));
    }
}
