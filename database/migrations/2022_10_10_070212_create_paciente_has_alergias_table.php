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
        Schema::create('qrv_paciente_has_alergias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_alergia')->constrained();
            $table->unsignedBigInteger('n_paciente')->constrained();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foraaneas
            $table->foreign('n_alergia')->references('id')->on('qrv_alergias');
            $table->foreign('n_paciente')->references('id')->on('qrv_pacientes');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_paciente_has_alergias');
    }
};
