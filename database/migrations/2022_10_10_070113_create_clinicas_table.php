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
        Schema::create('qrv_clinicas', function (Blueprint $table) {
            $table->id('n_clinica');
            $table->string('v_nomclin');
            $table->string('v_pais');
            $table->string('v_ciuomun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_clinicas');
    }
};
