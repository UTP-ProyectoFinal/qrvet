<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrv_userdetalle', function (Blueprint $table) {
            $table->id();
            $table->string('v_nombres');
            $table->string('v_apellidos');
            $table->string('v_telefono');
            $table->string('v_codcolegio');
            $table->boolean('n_estatus');
            $table->unsignedBigInteger('n_perfil')->constrained();
            $table->unsignedBigInteger('n_clinica')->constrained();

            //Foraneas
            $table->foreign('n_perfil')->references('id')->on('qrv_perfiles');
            $table->foreign('n_clinica')->references('id')->on('qrv_clinicas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_userdetalle');
    }
};
