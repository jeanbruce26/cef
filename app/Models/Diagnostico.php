<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'Diagnostico';
    protected $fillable = [
        'idDiagnostico',
        'Nombre_Diagnostico',
        'Clase_idClase',
        'Tipo_Diagnostico_idTipo_Diagnostico',
        'Diagnostico_General',
        
    ];

    public function tipoDiagnostico(){
    	return $this->belongsTo(TipoDiagnostico::class, 'Tipo_Diagnostico_idTipo_Diagnostico', 'idTipo_Diagnostico');
    }

    public function clase(){
    	return $this->belongsTo(Clase::class, 'Clase_idClase', 'idClase');
    }

    
}
