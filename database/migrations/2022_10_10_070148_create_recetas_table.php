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
            $table->id();
            $table->string('n_cantidad');
            $table->string('v_dosis');
            $table->unsignedBigInteger('n_medica')->constrained();
            $table->unsignedBigInteger('n_atencion')->constrained();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foraneas
            $table->foreign('n_medica')->references('id')->on('qrv_medicamentos');
            $table->foreign('n_atencion')->references('id')->on('qrv_atenciones');

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
