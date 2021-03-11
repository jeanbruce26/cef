<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Racimo;

class RacimoController extends Controller
{
   public function index()
    {
    	$racimo = Racimo::orderBy('idracimo','ASC')->paginate();
    	return view('Racimo.index', compact('racimo'));
    }
}
