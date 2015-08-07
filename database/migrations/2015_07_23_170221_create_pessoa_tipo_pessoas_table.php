<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaTipoPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_tipo_pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idPessoa')->unsigned();
            $table->bigInteger('idTipoPessoa')->unsigned();

            $table->foreign('idPessoa')->references('id')->on('pessoas');
            $table->foreign('idTipoPessoa')->references('id')->on('tipo_pessoas');
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
        Schema::drop('pessoa_tipo_pessoas');
    }
}
