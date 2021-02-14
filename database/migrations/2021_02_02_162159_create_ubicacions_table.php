<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacions', function (Blueprint $table) {
            $table->string('codigo_ubicacion');
            $table->primary('codigo_ubicacion');
            $table->string('descripcion_ubicacion');
            $table->string('codigo_pilon')->nullable();
            $table->foreign('codigo_pilon')->references('codigo_pilon')->on('pilons');
            $table->boolean('estado_ubicacion');
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
        Schema::dropIfExists('ubicacions');
    }
}
