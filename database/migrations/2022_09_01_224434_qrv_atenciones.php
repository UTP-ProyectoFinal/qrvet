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
        Schema::create('qrv_atenciones', function (Blueprint $table) {
            $table->id('n_atencion');
            $table->string('v_motivo');
            $table->integer('n_peso');
            $table->integer('n_temp');
            $table->integer('n_frecresp');
            $table->integer('n_freccard');
            $table->string('v_detdiagnos');
            $table->string('v_detproced');
            $table->unsignedBigInteger('n_historia')->constrained();
            $table->unsignedBigInteger('n_diagnos')->constrained();
            $table->unsignedBigInteger('n_procedimiento')->constrained();

            // Foraneas
            $table->foreign('n_historia')->references('n_historia')->on('qrv_historias');
            $table->foreign('n_diagnos')->references('n_diagnos')->on('qrv_diagnosticos');
            $table->foreign('n_procedimiento')->references('n_procedimiento')->on('qrv_procedimientos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_atenciones');

    }
};
