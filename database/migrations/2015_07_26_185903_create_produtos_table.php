<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idUsuario')->unsigned();
            $table->bigInteger('idTipoProduto')->unsigned();
            $table->string('descProduto');
            $table->float('valorCustoProduto');
            $table->float('valorVendaProduto');
            $table->float('qtdEstoqueProduto');

            $table->foreign('idUsuario')->references('id')->on('usuarios');
            $table->foreign('idTipoProduto')->references('id')->on('tipo_produtos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produtos');
    }
}
