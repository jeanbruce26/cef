<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'paso1';
    protected $fillable = [
    	'idPaso1',
    	'Diagnostico_idDiagnostico',
    	'idfamilia',
    	'valor',

 
    ];

    public $timestamps = false;
}
