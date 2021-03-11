<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familia;
use App\Models\Ubigeo;
use App\Models\Religion;
use App\Models\User;

class FamiliaController extends Controller
{
    


     public function index($id_user)
    {

    	$user = User::find($id_user);
    	$religion = Religion::all();
    	$familia = Familia::orderBy('idFamilia','ASC')->paginate();
    	return view('Familia.index', compact('religion','familia','id_user'));
    }


    
}
