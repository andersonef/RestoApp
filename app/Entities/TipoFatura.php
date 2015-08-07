<?php

namespace RestoApp\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoFatura extends Model
{
    public static $snakeAttributes = false;
    protected $fillable = ['descTipoFatura', 'pagarTipoFatura'];
}
