<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefeicaoPratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refeicao_pratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idRefeicao')->unsigned();
            $table->bigInteger('idPrato')->unsigned();
            $table->string('obsRefeicaoPrato')->nullable();

            $table->foreign('idRefeicao')->references('id')->on('refeicoes');
            $table->foreign('idPrato')->references('id')->on('pratos');
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
        Schema::drop('refeicao_pratos');
    }
}
