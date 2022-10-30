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
            $table->id();
            $table->string('v_identifica');
            $table->string('v_nombre');
            $table->string('v_apellido');
            $table->date('d_fecnaci');
            $table->unsignedBigInteger('n_sexo')->constrained();
            $table->unsignedBigInteger('n_raza')->constrained();
            $table->unsignedBigInteger('n_cliente')->constrained();

            // Foraneas
            $table->foreign('n_sexo')->references('id')->on('qrv_sexo');
            $table->foreign('n_raza')->references('id')->on('qrv_razas');
            $table->foreign('n_cliente')->references('id')->on('qrv_clientes');

        });
    }

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
