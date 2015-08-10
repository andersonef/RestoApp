<?php

use Illuminate\Database\Seeder;
use RestoApp\Entities\Produto;
use RestoApp\Entities\ProdutoTipoPrato;
class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 1, 'descProduto' => 'Marmitex Pequena', 'valorCustoProduto' => 2, 'valorVendaProduto' => 6.5, 'qtdEstoqueProduto' => 230]);
        ProdutoTipoPrato::create(['idProduto' => 1, 'idTipoPrato' => 2, 'limiteTipoPrato' => 1]);
        ProdutoTipoPrato::create(['idProduto' => 1, 'idTipoPrato' => 3, 'limiteTipoPrato' => 1]);
        ProdutoTipoPrato::create(['idProduto' => 1, 'idTipoPrato' => 4, 'limiteTipoPrato' => 0]);

        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 1, 'descProduto' => 'Marmitex Média', 'valorCustoProduto' => 2, 'valorVendaProduto' => 7.5, 'qtdEstoqueProduto' => 230]);
        ProdutoTipoPrato::create(['idProduto' => 2, 'idTipoPrato' => 1, 'limiteTipoPrato' => 3]);
        ProdutoTipoPrato::create(['idProduto' => 2, 'idTipoPrato' => 2, 'limiteTipoPrato' => 2]);
        ProdutoTipoPrato::create(['idProduto' => 2, 'idTipoPrato' => 3, 'limiteTipoPrato' => 2]);
        ProdutoTipoPrato::create(['idProduto' => 2, 'idTipoPrato' => 4, 'limiteTipoPrato' => 2]);

        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 1, 'descProduto' => 'Marmitex Grande', 'valorCustoProduto' => 2, 'valorVendaProduto' => 10, 'qtdEstoqueProduto' => 230]);
        ProdutoTipoPrato::create(['idProduto' => 3, 'idTipoPrato' => 1, 'limiteTipoPrato' => 3]);
        ProdutoTipoPrato::create(['idProduto' => 3, 'idTipoPrato' => 2, 'limiteTipoPrato' => 3]);
        ProdutoTipoPrato::create(['idProduto' => 3, 'idTipoPrato' => 3, 'limiteTipoPrato' => 3]);
        ProdutoTipoPrato::create(['idProduto' => 3, 'idTipoPrato' => 4, 'limiteTipoPrato' => 3]);

        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 2, 'descProduto' => 'Prato Feito Pequeno', 'valorCustoProduto' => 2, 'valorVendaProduto' => 7, 'qtdEstoqueProduto' => 230]);
        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 2, 'descProduto' => 'Prato Feito Médio', 'valorCustoProduto' => 2, 'valorVendaProduto' => 8, 'qtdEstoqueProduto' => 230]);
        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 2, 'descProduto' => 'Prato Feito Grande', 'valorCustoProduto' => 2, 'valorVendaProduto' => 11, 'qtdEstoqueProduto' => 230]);
        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 3, 'descProduto' => 'Coca cola', 'valorCustoProduto' => 2, 'valorVendaProduto' => 3, 'qtdEstoqueProduto' => 230]);
        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 3, 'descProduto' => 'Fanta', 'valorCustoProduto' => 2, 'valorVendaProduto' => 2.9, 'qtdEstoqueProduto' => 230]);
        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 3, 'descProduto' => 'Suco de Frutas', 'valorCustoProduto' => 2, 'valorVendaProduto' => 3.5, 'qtdEstoqueProduto' => 230]);
        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 4, 'descProduto' => 'Torta de Chocolate', 'valorCustoProduto' => 2, 'valorVendaProduto' => 4, 'qtdEstoqueProduto' => 230]);
        Produto::create(['idUsuario' => 1, 'idTipoProduto' => 4, 'descProduto' => 'Mousse de Abacaxi', 'valorCustoProduto' => 2, 'valorVendaProduto' => 2.5, 'qtdEstoqueProduto' => 230]);

    }
}
