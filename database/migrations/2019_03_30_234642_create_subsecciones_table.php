<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubseccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsecciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',64);

            $table->unsignedInteger('seccion_id')->nullable();
            //relationships
            $table->foreign('seccion_id')->references('id')->on('secciones')
            ->onDelete('set null')
            ->onCascade('set null');
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
        Schema::dropIfExists('subcategorias');
    }
}
