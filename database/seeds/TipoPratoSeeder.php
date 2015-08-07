<?php

use Illuminate\Database\Seeder;

class TipoPratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \RestoApp\Entities\TipoPrato::create(['descTipoPrato' => 'db_tipoprato.pratoBase']);
        \RestoApp\Entities\TipoPrato::create(['descTipoPrato' => 'db_tipoprato.guarnicao']);
        \RestoApp\Entities\TipoPrato::create(['descTipoPrato' => 'db_tipoprato.carne']);
        \RestoApp\Entities\TipoPrato::create(['descTipoPrato' => 'db_tipoprato.salada']);
    }
}
