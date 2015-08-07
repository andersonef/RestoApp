<?php

use Illuminate\Database\Seeder;

class TipoFaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \RestoApp\Entities\TipoFatura::create(['descTipoFatura' => 'CONTA A RECEBER', 'pagarTipoFatura' => 0]);
        \RestoApp\Entities\TipoFatura::create(['descTipoFatura' => 'CONTA A PAGAR', 'pagarTipoFatura' => 1]);
    }
}
