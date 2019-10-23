<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    public function reserva()
    {
        return $this->hasMany('App\Reserva');

    }

    public function unidade()
    {
        return $this->hasMany('App\Unidade');

    }

    public function area()
    {
        return $this->hasMany('App\Area');

    }
}
