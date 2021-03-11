<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dominio extends Model
{
    protected $table = 'Dominio';
    protected $fillable = [
        'idDominio',
        'Nombre_Dominio',
        
    ];
}
