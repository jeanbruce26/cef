<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubigeo;

class UbigeoController extends Controller
{
    public function index()
    {
    	$ubi = Ubigeo::orderBy('idUbigeo','DESC')->paginate();
    	return view('Ubigeo.index', compact('ubi'));
    }
}