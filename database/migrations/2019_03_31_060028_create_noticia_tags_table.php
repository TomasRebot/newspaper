<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiaTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tag_id')->nullable();
            $table->unsignedInteger('noticia_id')->nullable();
            //relationships
            $table->foreign('tag_id')->references('id')->on('tags')
            ->onCascade('set null')
            ->onDelete('set null');
            $table->foreign('noticia_id')->references('id')->on('noticias')
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
        Schema::dropIfExists('noticia_tags');
    }
}
