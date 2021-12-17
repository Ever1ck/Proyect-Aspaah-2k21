<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id('id_ingreso');
            $table->char('ti_pago', 1);
            $table->char('ti_ingreso', 1);
            $table->string('no_ingreso', 100);
            $table->float('ca_pago');
            $table->float('ca_descuento');
            $table->float('mo_total_pago');
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();
            
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}
