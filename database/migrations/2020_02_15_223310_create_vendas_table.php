<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rua');
            $table->string('numero');
            $table->string('comp');
            $table->string('cpf');
            $table->string('nome_comprador');
            $table->string('conta');
            $table->string('valor');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')-> onDelete("cascade")-> onUpdate("cascade");
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
        Schema::dropIfExists('vendas');
    }
}
