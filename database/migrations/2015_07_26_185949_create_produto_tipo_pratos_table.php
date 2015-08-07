<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTipoPratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_tipo_pratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idProduto')->unsigned();
            $table->bigInteger('idTipoPrato')->unsigned();
            $table->float('limiteRecipienteTipoPrato');

            $table->foreign('idProduto')->references('id')->on('produtos');
            $table->foreign('idTipoPrato')->references('id')->on('tipo_pratos');
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
        Schema::drop('produto_tipo_pratos');
    }
}
