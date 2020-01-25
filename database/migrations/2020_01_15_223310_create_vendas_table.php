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
            $table->integer('cpf');
            $table->string('nome_comprador');
            $table->string('conta');

            $table->unsignedBigInteger('venda_id');
            $table->foreign('venda_id')->references('id')->on('vendas');
            //$table->primary(['venda_id']);
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
