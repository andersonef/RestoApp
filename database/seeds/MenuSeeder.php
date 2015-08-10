<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \RestoApp\Entities\Menu::create(['id' => 1, 'textMenu' => 'db_menu.menuprincipal', 'urlMenu' => '/app/dashboard', 'iconMenu' => 'icon-home']);
        \RestoApp\Entities\Menu::create(['id' => 2, 'textMenu' => 'db_menu.pedidos', 'urlMenu' => '/app/dashboard', 'iconMenu' => 'icon-puzzle']);
        \RestoApp\Entities\Menu::create(['id' => 3, 'textMenu' => 'db_menu.novopedido', 'urlMenu' => '/app/pedidos/create', 'idMenuPai' => 2]);
        \RestoApp\Entities\Menu::create(['id' => 4, 'textMenu' => 'db_menu.pedidosemaberto', 'urlMenu' => '/app/dashboard', 'idMenuPai' => 2]);
        \RestoApp\Entities\Menu::create(['id' => 5, 'textMenu' => 'db_menu.relatoriodiario', 'urlMenu' => '/app/dashboard', 'idMenuPai' => 2]);
        \RestoApp\Entities\Menu::create(['id' => 6, 'textMenu' => 'db_menu.produtos', 'urlMenu' => '/app/dashboard', 'iconMenu' => 'glyphicon glyphicon-th-list']);
        \RestoApp\Entities\Menu::create(['id' => 7, 'textMenu' => 'db_menu.gerenciarprodutos', 'urlMenu' => '/app/dashboard', 'idMenuPai' => 6]);
        \RestoApp\Entities\Menu::create(['id' => 8, 'textMenu' => 'db_menu.tiposdeprodutos', 'urlMenu' => '/app/dashboard', 'idMenuPai' => 6]);


        \RestoApp\Entities\Menu::create(['id' => 9, 'textMenu' => 'db_menu.cardapio', 'urlMenu' => '/app/cardapio', 'iconMenu' => 'glyphicon glyphicon-list-alt']);
        \RestoApp\Entities\Menu::create(['id' => 10, 'idMenuPai' => 9, 'textMenu' => 'db_menu.novocardapio', 'urlMenu' => '/app/cardapio/create', 'iconMenu' => 'file-text-o']);
        \RestoApp\Entities\Menu::create(['id' => 11, 'idMenuPai' => 9, 'textMenu' => 'db_menu.listcardapio', 'urlMenu' => '/app/cardapio', 'iconMenu' => 'list-ul']);
        \RestoApp\Entities\Menu::create(['id' => 12, 'idMenuPai' => 9, 'textMenu' => 'db_menu.gerenciarprato', 'urlMenu' => '/app/prato', 'iconMenu' => 'list-ul']);
    }
}
