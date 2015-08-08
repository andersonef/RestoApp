<?php

use Illuminate\Database\Seeder;
use RestoApp\Entities\Prato;

class PratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Arroz', 'idTipoPrato' => 1]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Feijão', 'idTipoPrato' => 1]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Macarrão Bolognesa', 'idTipoPrato' => 2]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Batata', 'idTipoPrato' => 2]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Xuxu', 'idTipoPrato' => 2]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Abóbora', 'idTipoPrato' => 2]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Bife de vaca', 'idTipoPrato' => 3]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Peixe Grelhado', 'idTipoPrato' => 3]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Salada de alface', 'idTipoPrato' => 4]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Salada de repolho', 'idTipoPrato' => 4]);
        Prato::create(['idUsuario' => 1, 'nomePrato' => 'Salada de tomate', 'idTipoPrato' => 4]);
    }
}
