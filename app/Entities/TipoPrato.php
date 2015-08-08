<?php

namespace RestoApp\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoPrato extends Model
{

    public function getDescTipoPratoAttribute($val)
    {
        return trans($val);
    }

    public function Pratos()
    {
        return $this->hasMany(Prato::class, 'idTipoPrato');
    }
}
