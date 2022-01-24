<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBemPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bem_paciente', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('cpf');
            $table->string('nome');
            $table->date("data_nasc");
            $table->string('sexo');
            $table->string('telefono');
            $table->string('estado_civil');
            $table->string('endereço');
            $table->string('ocupacao');
            $table->integer('filhos');
            $table->string('email');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bem_paciente');
    }
}
