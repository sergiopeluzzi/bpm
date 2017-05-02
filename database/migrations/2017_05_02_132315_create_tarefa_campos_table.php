<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefaCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefa_campos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tarefa_id')->unsigned();
            $table->integer('campo_id')->unsigned();
            $table->foreign('tarefa_id')->references('id')->on('tarefas');
            $table->foreign('campo_id')->references('id')->on('campos');
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
        Schema::dropIfExists('tarefa_campos');
    }
}
