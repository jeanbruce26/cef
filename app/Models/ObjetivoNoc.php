<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjetivoNoc extends Model
{
   protected $table = 'objetivonoc';
    protected $fillable = [
        'idObjetivo_Noc',
        'Nombre_Objetivo_Noc',
        'Diagnostico_General_idDiagnoostico_General',


        
    ];
}
