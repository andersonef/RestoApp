<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \RestoApp\Entities\Usuario::create(['nomeUsuario' => 'Sabor & Arte', 'emailUsuario' => 'saborearte@gmail.com', 'loginUsuario' => 'saborearte', 'senhaUsuario' => bcrypt('sabor5858')]);
    }
}
