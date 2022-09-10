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
        Schema::create('qrv_direcciones', function (Blueprint $table) {
            $table->id('n_direccion');
            $table->string('v_nombre');
            $table->string('v_calle');
            $table->string('v_distrito');
            $table->string('v_depart');
            $table->string('v_ciudad');
            $table->string('v_pais');
            $table->unsignedBigInteger('n_cliente');

            //Foraneas
            $table->foreign('n_cliente')->references('n_cliente')->on('qrv_clientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_direcciones');

    }
};
