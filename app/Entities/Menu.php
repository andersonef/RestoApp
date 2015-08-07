<?php

namespace RestoApp\Entities;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public static $snakeAttributes = false;
    protected $fillable = [
        'id',
        'idMenuPai',
        'textMenu',
        'urlMenu',
        'iconMenu'
    ];

    public function Menus()
    {
        return $this->hasMany('RestoApp\Entities\Menu','idMenuPai');
    }

    public function getTextMenuAttribute($val)
    {
        return trans($val);
    }
}
