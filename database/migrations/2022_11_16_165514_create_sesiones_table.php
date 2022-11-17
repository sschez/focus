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
        Schema::create('sesions', function (Blueprint $table) {
            $table->id();
            $table->integer('dolor');
            $table->integer('caida');
            $table->integer('numSesion');
            $table->integer('repRealizadas')->nullable();
            $table->float('extensionMax')->nullable();
            $table->json('rangos')->nullable();
            $table->dateTime('fechaCita');
            $table->unsignedBigInteger('terapia_id');
            $table->foreign('terapia_id')->references('id')->on('terapias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sesiones');
    }
};
