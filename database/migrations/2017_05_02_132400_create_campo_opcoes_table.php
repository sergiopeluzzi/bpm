<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampoOpcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campo_opcoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campo_id')->unsigned();
            $table->integer('opcao_id')->unsigned();
            $table->foreign('campo_id')->references('id')->on('campos');
            $table->foreign('opcao_id')->references('id')->on('opcoes');
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
        Schema::dropIfExists('campo_opcoes');
    }
}
