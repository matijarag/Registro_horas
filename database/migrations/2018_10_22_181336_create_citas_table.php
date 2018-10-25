<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->increments('id_cit');
            $table->string('observaciones',100);
            //$table->unsignedInteger('id_horarios_disponibles');
            //$table->foreign('id_horarios_disponibles')->references('id_horarios_disponibles')->on('horarios_diponible');
            $table->unsignedInteger('id_esci');
            $table->foreign('id_esci')->references('id_est_cit')->on('estado_cita');
            $table->unsignedInteger('id_tici');
            $table->foreign('id_tici')->references('id_tip_cit')->on('tipo_cita');
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
        Schema::dropIfExists('citas');
    }
}
