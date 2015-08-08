<?php

namespace RestoApp\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{

    public function getDescTipoProdutoAttribute($val)
    {
        return trans($val);
    }
}
