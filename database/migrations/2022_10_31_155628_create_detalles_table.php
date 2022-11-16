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
        Schema::create('qrv_userdetalles', function (Blueprint $table) {
            $table->id();
            $table->string('v_telefono');
            $table->string('v_codcolegio');
            $table->boolean('n_estatus');
            $table->unsignedBigInteger('n_perfil')->constrained();
            $table->unsignedBigInteger('n_clinica')->constrained(); /** crear la semilla npara clinica***/
            $table->unsignedBigInteger('n_user')->constrained();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foraneas
            $table->foreign('n_perfil')->references('id')->on('qrv_perfiles');
            $table->foreign('n_clinica')->references('id')->on('qrv_clinicas');
            $table->foreign('n_user')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_userdetalles');
    }
};
