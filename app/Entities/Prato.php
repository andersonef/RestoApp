<?php

namespace RestoApp\Entities;

use Illuminate\Auth\Guard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Prato extends Model
{
    protected $fillable = ['idUsuario', 'nomePrato', 'calPorcaoPrato', 'idTipoPrato'];
    public static $snakeAttributes = false;

    public function TipoPrato()
    {
        return $this->belongsTo(TipoPrato::class, 'idTipoPrato');
    }

    public function newQuery()
    {
        $query = parent::newQuery();
        if(Auth::guest()) return $query; //se a pessoa não estiver logada, nada é alterado aki...
        return $query->where('idUsuario', '=', Auth::user()->id);
    }


}
