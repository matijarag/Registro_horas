<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usu');
            $table->string('nombre',45);
            $table->string('username',45);
            $table->string('pass_usu',12);
            $table->string('email',40);
            $table->unsignedInteger('id_tipo_usuario');
            $table->foreign('id_tipo_usuario')->references('id_tip_usu')->on('tipo_usuario');
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
        Schema::dropIfExists('usuarios');
    }
}
