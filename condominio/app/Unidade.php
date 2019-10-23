<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    public function condominio()
    {
        return $this->belongsTo('App\Condominio');

    }

    public function reserva()
    {
        return $this->hasMany('App\Reserva');
    }

    public function area()
    {
        return $this->hasMany('App\Area');
    }
}
