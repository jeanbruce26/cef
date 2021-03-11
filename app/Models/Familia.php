<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table = 'familia';
    protected $primaryKey = 'idFamilia';
    protected $fillable = [
        
        'Familia',
        'Direccion',
        'Nun_Familiares',
        'Ingreso_Mensual',
        'Estado_Civil',
        'Religion_idReligion',
        'Ubigeo_idUbigeo',
        'id_user',
 
    ];

    public $timestamps = false;
}
