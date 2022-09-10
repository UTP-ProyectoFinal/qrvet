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
        Schema::create('qrv_pacientes', function (Blueprint $table) {
            $table->id('n_paciente');
            $table->string('v_identifica');
            $table->string('v_nombre');
            $table->string('v_apellido');
            $table->date('d_fecnaci');
            $table->unsignedBigInteger('n_sexo');
            $table->unsignedBigInteger('n_raza');
            $table->unsignedBigInteger('n_cliente');

            // Foraneas
            $table->foreign('n_sexo')->references('n_sexo')->on('qrv_sexo');
            $table->foreign('n_raza')->references('n_raza')->on('qrv_raza');
            $table->foreign('n_cliente')->references('n_cliente')->on('qrv_clientes');

        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_pacientes');

    }
};
