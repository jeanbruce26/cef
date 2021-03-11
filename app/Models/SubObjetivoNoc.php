<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubObjetivoNoc extends Model
{
    protected $table = 'subobjetivosnoc';
    protected $fillable = [
        'idSub_Objetivos_Noc',
        'Sub_Objetivos_Noc',
        'Objetivo_Noc_idObjetivo_Noc',


        
    ];
}
