<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',64);
            $table->string('bajada',128);
            $table->mediumText('cuerpo');
            $table->string('autor');
            $table->text('nota_resaltada')->nullable();
            $table->unsignedInteger('visitas')->nullable();

            $table->enum('estado',['0','1'])->default('0');
            $table->unsignedInteger('seccion_id')->nullable();;
            $table->unsignedInteger('subseccion_id')->nullable();

            //relationships

            $table->foreign('seccion_id')->references('id')->on('secciones')
            ->onCascade('set null')
            ->onDelete('set null');
            $table->foreign('subseccion_id')->references('id')->on('subsecciones')
            ->onCascade('set null')
            ->onDelete('set null');

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
        Schema::dropIfExists('noticias');
    }
}
