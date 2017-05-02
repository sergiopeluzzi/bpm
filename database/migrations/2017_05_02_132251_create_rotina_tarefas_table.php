<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotinaTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotina_tarefas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rotina_id')->unsigned();
            $table->integer('tarefa_id')->unsigned();
            $table->foreign('rotina_id')->references('id')->on('rotinas');
            $table->foreign('tarefa_id')->references('id')->on('tarefas');
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
        Schema::dropIfExists('rotina_tarefas');
    }
}
