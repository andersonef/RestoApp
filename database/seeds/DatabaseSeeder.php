<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsuarioSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(TipoFaturaSeeder::class);
        $this->call(TipoProdutoSeeder::class);
        $this->call(TipoPratoSeeder::class);

        Model::reguard();
    }
}
