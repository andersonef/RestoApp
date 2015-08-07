<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemFaturavelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_faturavels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idUsuario')->unsigned();
            $table->bigInteger('idFatura')->unsigned();
            $table->bigInteger('idProduto')->nullable()->unsigned();

            $table->float('vUnitarioItemFaturavel');
            $table->float('vBrutoItemFaturavel');
            $table->float('vLiquidoItemFaturavel');
            $table->float('qtdItemFaturavel');
            $table->string('obsItemFaturavel')->nullable();

            $table->foreign('idUsuario')->references('id')->on('usuarios');
            $table->foreign('idFatura')->references('id')->on('faturas');
            $table->foreign('idProduto')->references('id')->on('produtos');
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
        Schema::drop('item_faturavels');
    }
}
