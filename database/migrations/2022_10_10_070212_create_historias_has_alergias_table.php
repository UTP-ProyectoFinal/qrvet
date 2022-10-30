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
        Schema::create('qrv_historias_has_alergias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_historia')->constrained();
            $table->unsignedBigInteger('n_alergia')->constrained();

            //Foraaneas
            $table->foreign('n_historia')->references('id')->on('qrv_historias');
            $table->foreign('n_alergia')->references('id')->on('qrv_alergias');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_historias_has_alergias');
    }
};
