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
        Schema::create('qrv_razas', function (Blueprint $table) {
            $table->id('n_raza');
            $table->string('v_nombre');
            $table->string('v_apuntes');
            $table->unsignedBigInteger('n_especie')->constrained('qrv_especies');
            $table->unsignedBigInteger('a_n_iduser')->constrained('users');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            // Foraneas
            $table->foreign('n_especie')->references('n_especie')->on('qrv_especies');
            $table->foreign('a_n_iduser')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_razas');

    }
};
