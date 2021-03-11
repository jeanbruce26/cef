<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Religion;

class ReligionController extends Controller
{
     public function index()
    {
    	$reli = Religion::orderBy('idReligion','DESC')->paginate();
    	return view('Religion.index', compact('reli'));
    }
}
