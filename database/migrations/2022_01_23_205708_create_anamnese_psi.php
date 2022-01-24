<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesePsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnese_psi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('motivo_consulta');
            $table->string('historia_mc');
            $table->string('tipo_sono');
            $table->integer('horas_sono');
            $table->boolean('dif_inicio');
            $table->boolean('acorda_noite');
            $table->boolean('acorda_manha');
            $table->boolean('exceso_sono');
            $table->boolean('pesadelos');
            $table->boolean('camina');

            $table->string('tipo_alimentacao');
            $table->string('outro_tipo_alimentacao');
            $table->boolean('descontrole_alimentar');
            $table->boolean('ingesta_variavel');
            $table->boolean('medicamentos');
            $table->boolean('vomitos');

            $table->string('atividade_fisica');
            $table->string('frequencia_atividade');
            $table->string('objetivo_fisico');
            $table->string('outro_objetivo');

            $table->string('antecedentes_pessoais');
            $table->string('valoracao_estado');
            $table->string('hipotese');
            $table->string('objetivo_terapeutico');
            $table->string('plano_intervencao');






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anamnese_psi');
    }
}
