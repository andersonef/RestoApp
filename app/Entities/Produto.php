<?php

namespace RestoApp\Entities;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public static $snakeAttributes = false;

    public function TipoPratos()
    {
        return $this->belongsToMany(TipoPrato::class, 'produto_tipo_pratos', 'idProduto', 'idTipoPrato')->withPivot('limiteTipoPrato');
    }
}
