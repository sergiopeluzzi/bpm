<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_campos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dados');
            $table->integer('opcao_id')->unsigned();
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
        Schema::dropIfExists('dados_campos');
    }
}
