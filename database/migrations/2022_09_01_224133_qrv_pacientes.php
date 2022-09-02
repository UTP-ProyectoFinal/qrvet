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
// falta foraneas
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
