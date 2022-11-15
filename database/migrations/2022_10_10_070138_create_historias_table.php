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
        Schema::create('qrv_historias', function (Blueprint $table) {
            $table->id();
            $table->string('v_motivo');
            $table->integer('n_peso');
            $table->integer('n_temp');
            $table->integer('n_frecresp');
            $table->integer('n_freccard');
            $table->string('v_detdiagnos');
            $table->string('v_detproced');
            $table->unsignedBigInteger('n_atencion')->constrained();
            $table->unsignedBigInteger('n_diagnos')->constrained();
            $table->unsignedBigInteger('n_procedimiento')->constrained();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            // Foraneas
            $table->foreign('n_atencion')->references('id')->on('qrv_atenciones');
            $table->foreign('n_diagnos')->references('id')->on('qrv_diagnosticos');
            $table->foreign('n_procedimiento')->references('id')->on('qrv_procedimientos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_historias');
    }
};
