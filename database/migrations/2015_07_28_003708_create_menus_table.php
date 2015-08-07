<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->bigInteger('idMenuPai')->nullable()->unsigned();
            $table->string('textMenu');
            $table->string('urlMenu');
            $table->string('iconMenu')->nullable();
            $table->primary('id');

            $table->foreign('idMenuPai')->references('id')->on('menus');
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
        Schema::drop('menus');
    }
}
