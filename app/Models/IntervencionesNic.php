<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntervencionesNic extends Model
{
    protected $table = 'intervencionesnic';
    protected $fillable = [
        'idIntervenciones_Nic',
        'Nombre_Intervenciones_Nic',
        'diagnostico_idDiagnostico',


        
    ];
}
