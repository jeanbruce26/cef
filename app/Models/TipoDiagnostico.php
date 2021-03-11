<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDiagnostico extends Model
{
    protected $table = 'tipodiagnostico';
    protected $fillable = [
        'idTipo_Diagnostico',
        'Nombre_Tipo_Diagnostico',
       
        
    ];
}
