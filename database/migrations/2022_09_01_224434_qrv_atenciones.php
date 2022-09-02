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
// Falta foraneas
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
