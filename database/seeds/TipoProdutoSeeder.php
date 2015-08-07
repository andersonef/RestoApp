<?php

use Illuminate\Database\Seeder;

class TipoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \RestoApp\Entities\TipoProduto::create(['descTipoProduto' => 'db_tipoproduto.marmitex']);
        \RestoApp\Entities\TipoProduto::create(['descTipoProduto' => 'db_tipoproduto.pratofeito']);
        \RestoApp\Entities\TipoProduto::create(['descTipoProduto' => 'db_tipoproduto.bebida']);
        \RestoApp\Entities\TipoProduto::create(['descTipoProduto' => 'db_tipoproduto.doce']);
        \RestoApp\Entities\TipoProduto::create(['descTipoProduto' => 'db_tipoproduto.diverso']);
    }
}
