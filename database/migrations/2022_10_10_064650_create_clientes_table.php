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
        Schema::create('qrv_clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('n_tipodoc')->constrained();
            $table->string('n_documento');
            $table->string('v_nombre');
            $table->string('v_apellido');
            $table->string('v_correo');
            $table->string('v_telefono');
            $table->string('v_telfijo');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //Foraneas
            $table->foreign('n_tipodoc')->references('id')->on('qrv_tipodoc');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_clientes');
    }
};
