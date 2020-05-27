<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasOportunidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_oportunidades', function (Blueprint $table) {
            $table->id();
            $table->boolean('resp_promotor');
            $table->boolean('resp_pers_poder');
            $table->date('fecha_resp_prom');
            $table->date('fecha_resp_poder');
            $table->timestamps();
            $table->bigInteger('oportunidad_id')->unsigned();
            $table->bigInteger('pregunta_id')->unsigned();

            $table->foreign('oportunidad_id')->references('id')->on('oportunidades');
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas_oportunidades');
    }
}
