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
        Schema::create('qrv_recetas', function (Blueprint $table) {
            $table->id('n_receta');
            $table->string('n_cantidad');
            $table->string('v_dosis');
            $table->unsignedBigInteger('n_medica')->constrained();
            $table->unsignedBigInteger('n_atencion')->constrained();

            //Foraneas
            $table->foreign('n_medica')->references('n_medica')->on('qrv_medicamentos');
            $table->foreign('n_atencion')->references('n_atencion')->on('qrv_atenciones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_recetas');
    }
};
