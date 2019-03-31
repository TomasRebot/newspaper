<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo',['imagen','video']);
            $table->enum('uso',['portada','galeria','miniatura','icono','url']);
            $table->integer('estado');
            $table->integer('orden');
            $table->string('mime');
            $table->string('grupo');
            $table->integer('relacionado')->unsigned();
            $table->string('archivo');
            $table->string('titulo');
            $table->string('descripcion',254);
            //relationship
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
        Schema::dropIfExists('resources');
    }
}
