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
            $table->integer('nrocliente');
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->string('email',20);
            $table->string('telefono',20);
            $table->string('telfijo',20);
            $table->integer('tipodoc');
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
