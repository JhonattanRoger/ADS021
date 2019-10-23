<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function condominio()
    {
        return $this->belongsTo('App\Condominio');

    }

    public function reserva()
    {
        return $this->hasMany('App\Reserva');
    }

    public function unidade()
    {
        return $this->belongsTo('App\Unidade');
    }
}
