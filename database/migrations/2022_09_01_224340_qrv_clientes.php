<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migratition
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrv_clientes', function (Blueprint $table) {
            $table->id('n_clientes');
            $table->string('n_documento');
            $table->string('v_nombre');
            $table->string('v_apellido');
            $table->string('v_correo');
            $table->string('v_telefono');
            $table->string('v_telfijo');
            $table->unsignedBigInteger('n_tipodoc');

            //Foraneas
            $table->foreign('n_tipodoc')->references('n_tipodoc')->on('qrv_tipodoc');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_clientes');

    }
};
