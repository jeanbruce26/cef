<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dominio;


class DominioController extends Controller
{
   public function index()
    {
    	$dominio = Dominio::orderBy('idDominio','ASC')->paginate();
    	return view('Dominio.index', compact('dominio'));
    }

}
