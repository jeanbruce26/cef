<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosibleCausa extends Model
{
    protected $table = 'posiblecuasa';
    protected $fillable = [
        'idPosible_Cuasa',
        'Nombre_Posible',
        'Diagnostico_idDiagnostico',

        
    ];
}
