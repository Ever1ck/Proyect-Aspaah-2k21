<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personas_id')->constrained();
            $table->string('codigo',50);
            $table->string('tipo',50);
            $table->string('categoria',8);
            $table->string('es_socio',50);
            $table->string('comunidad',50);
            $table->string('distrito',50);
            $table->string('provincia',50);
            $table->string('departamento',50);
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
        Schema::dropIfExists('socios');
    }
}
