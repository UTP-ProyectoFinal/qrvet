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
            $table->id('n_userdetalle');
            $table->string('v_nombres');
            $table->string('v_apellidos');
            $table->string('v_telefono');
            $table->string('v_codcolegio');
            $table->boolean('n_estatus');
            //falta clave foranea
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
