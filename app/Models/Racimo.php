<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racimo extends Model
{
    protected $table = 'racimo';
    protected $fillable = [
        'idracimo',
        'racimo',
        'Diagnostico_idDiagnostico ',
 
    ];
}
