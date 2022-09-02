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
            $table->string('n_peso');
            $table->string('n_temp');
            $table->string('n_frecresp');
            $table->string('n_freccard');
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
