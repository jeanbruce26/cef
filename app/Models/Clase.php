<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table = 'clase';
    protected $fillable = [
        'idClase',
        'Nombre_Clase',
        'N_Clase',
        'Dominio_idDominio',
        
    ];

    public function dominio(){
    	return $this->belongsTo(Dominio::class, 'Dominio_idDominio', 'idDominio');
    }
}
