<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('valor');
            $table->integer('quantidade');
            $table->string('nome_da_obra');
            $table->date('criacao');
            $table->string('descricao');
            $table->string('tamanho');
            $table->string('imagem');
            $table->unsignedBigInteger('artista_id');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('estilo_id');
            $table->foreign('estilo_id')->references('id')->on('estilos')-> onDelete("cascade")-> onUpdate("cascade");
            $table->foreign('artista_id')->references('id')->on('artistas')-> onDelete("cascade")-> onUpdate("cascade");
            $table->foreign('categoria_id')->references('id')->on('categorias')-> onDelete("cascade")-> onUpdate("cascade");
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
        Schema::dropIfExists('obras');
    }
}
