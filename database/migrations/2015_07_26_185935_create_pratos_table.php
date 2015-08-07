<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idUsuario')->unsigned()->nullable();;
            $table->bigInteger('idTipoPrato')->unsigned();
            $table->string('nomePrato');
            $table->float('calPorcaoPrato')->nullable();

            $table->foreign('idUsuario')->references('id')->on('usuarios');
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
        Schema::drop('pratos');
    }
}
