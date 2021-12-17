<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id();
            $table->char('es_inscripcion', 1);
            $table->unsignedBigInteger('ingreso_id');
            $table->unsignedBigInteger('FK_SOLICITADO')->unique();
            $table->unsignedBigInteger('FK_APROBADO')->nullable();
            $table->timestamps();
            
            $table->foreign('FK_SOLICITADO', 'mae_persona_solicitado_tbl_inscripcion_fk')->references('id')->on('personas');
            $table->foreign('FK_APROBADO', 'mae_persona_aprobado_tbl_inscripcion_fk')->references('id')->on('personas');
            $table->foreign('ingreso_id', 'tbl_ingresos_tbl_inscripcion_fk')->references('id_ingreso')->on('ingresos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcions');
    }
}
