<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
   public function condominio(){
        return $this->belongsTo('\App\Condominio');
   }
   public function unidade(){
        return $this->belongsTo('\App\Unidade');
   }
     
}