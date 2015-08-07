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
        \RestoApp\Entities\Menu::create(['id' => 1, 'textMenu' => 'db_menu.menuprincipal', 'urlMenu' => '#/dashboard', 'iconMenu' => 'icon-home']);
        \RestoApp\Entities\Menu::create(['id' => 2, 'textMenu' => 'db_menu.pedidos', 'urlMenu' => '#/pedidos', 'iconMenu' => 'icon-puzzle']);
        \RestoApp\Entities\Menu::create(['id' => 3, 'textMenu' => 'db_menu.novopedido', 'urlMenu' => '#/pedidos/novo', 'idMenuPai' => 2]);
        \RestoApp\Entities\Menu::create(['id' => 4, 'textMenu' => 'db_menu.pedidosemaberto', 'urlMenu' => '#/pedidos/aberto', 'idMenuPai' => 2]);
        \RestoApp\Entities\Menu::create(['id' => 5, 'textMenu' => 'db_menu.relatoriodiario', 'urlMenu' => '#/pedidos/diario', 'idMenuPai' => 2]);
        \RestoApp\Entities\Menu::create(['id' => 6, 'textMenu' => 'db_menu.produtos', 'urlMenu' => '#/produtos', 'iconMenu' => 'icon-puzzle']);
        \RestoApp\Entities\Menu::create(['id' => 7, 'textMenu' => 'db_menu.gerenciarprodutos', 'urlMenu' => '#/produtos/gerenciar', 'idMenuPai' => 6]);
        \RestoApp\Entities\Menu::create(['id' => 8, 'textMenu' => 'db_menu.tiposdeprodutos', 'urlMenu' => '#/produtos/tipos', 'idMenuPai' => 6]);
    }
}
