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
        Schema::create('qrv_medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('v_nombre');
            $table->string('v_apuntes');
            $table->unsignedBigInteger('a_n_iduser')->constrained();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            //Foraneas
            $table->foreign('a_n_iduser')->references('id')->on('users');


        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrv_medicamentos');

    }
};
