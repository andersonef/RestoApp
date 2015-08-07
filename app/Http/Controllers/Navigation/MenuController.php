<?php

namespace RestoApp\Http\Controllers\Navigation;

use RestoApp\Classes\ApiResponse;
use RestoApp\Entities\Menu;
use Illuminate\Http\Request;

use RestoApp\Http\Requests;
use RestoApp\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Retorna o JSON do menu
     *
     * @return Response
     */
    public function index(Menu $menu)
    {
        $itens = $menu->where('idMenuPai', '=',null)->get();
        foreach($itens as $i => $it) $itens[$i]->Menus;
        return new ApiResponse(
            $itens
        );
    }
}
