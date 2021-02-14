<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPilonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_pilones', function (Blueprint $table) {
            $table->string('codigo_datos_pilones');
            $table->primary('codigo_datos_pilones');
            $table->date('Fecha_datos_pilones');
            $table->date('fecha_virado_datos_pilones');
            $table->string('codigo_variedad');
            $table->foreign('codigo_variedad')->references('codigo_variedad')->on('variedads');
            $table->string('codigo_clase');
            $table->foreign('codigo_clase')->references('codigo_clase')->on('tipoclases');
            $table->string('codigo_finca');
            $table->foreign('codigo_finca')->references('codigo_finca')->on('fincas');
            $table->string('codigo_ubicacion');
            $table->foreign('codigo_ubicacion')->references('codigo_ubicacion')->on('ubicacions');
            //$table->foreign('codigo_pilon')->constrained('pilones');
           $table->string('codigo_pilon');
            $table->foreign('codigo_pilon')->references('codigo_pilon')->on('pilons');
            $table->foreignId('procedencias_id')->constrained('procedencias');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('datos_pilones');
    }
}
