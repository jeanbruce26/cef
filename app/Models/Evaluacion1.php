<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion1 extends Model
{
    protected $table = 'evaluacion1';
    protected $fillable = [
        'id',
        'subobjetivosnoc_idSub_Objetivos_Noc',
        'familia_idFamilia',
        'id_diag',
        'objetivonoc_idObjetivo_Noc',
        'valor',
        'valor2',
        
    ];

   public $timestamps = false;

   protected $appends = ['porcentaje_valor'];

   public function getPorcentajeValorAttribute(){
      $porcentaje = 0;
      $aumento = true;

      if($this->valor != NULL && $this->valor2 != NULL){
        // $porcentaje = number_format(($this->valor2*100)/$this->valor, 2);
        if($this->valor > $this->valor2){
          $porcentaje = number_format(($this->valor - $this->valor2)*25, 1);
          $aumento = false;
        }else{
          $porcentaje = number_format(($this->valor2 - $this->valor)*25, 1);
        }
      }
      return array(
        'porcentaje' => $porcentaje,
        'aumento' => $aumento
      );
   }

   public function subobjetivo(){
                 return $this->belongsTo(SubObjetivoNoc::class, 'subobjetivosnoc_idSub_Objetivos_Noc', 'idSub_Objetivos_Noc');
   }

   public function familia(){
                 return $this->belongsTo(Familia::class, 'familia_idFamilia', 'idFamilia');
   }
    
}
