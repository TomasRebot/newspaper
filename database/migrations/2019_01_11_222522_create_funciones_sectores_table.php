<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionesSectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funciones_sectores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sector_id')->nullable();
            $table->unsignedInteger('funcion_id')->nullable();
            $table->unsignedInteger('precio');
            $table->timestamps();
            /**relationships */

            $table->foreign('sector_id')->references('id')->on('sectores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('funcion_id')->references('id')->on('funciones')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funciones_sectores');
    }
}
