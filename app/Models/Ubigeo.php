<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    protected $table = 'ubigeo';
    protected $fillable = [
        'idUbigeo',
        'Id_Departamento',
        'Id_Provincia',
        'Id_Distrito',
        'Departamento',
        'Provincia',
        'Distrito',
    ];
}
