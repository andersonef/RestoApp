<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idTipoFatura')->unsigned();
            $table->bigInteger('idPessoa')->unsigned();
            $table->float('valorBrutoFatura');
            $table->float('valorLiquidoFatura');
            $table->string('obsFatura')->nullable();

            $table->foreign('idPessoa')->references('id')->on('pessoas');
            $table->foreign('idTipoFatura')->references('id')->on('tipo_faturas');
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
        Schema::drop('faturas');
    }
}
