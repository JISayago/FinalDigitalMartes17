<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comprobante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobantes', function (Blueprint $table) {
        $table->bigIncrements('comprobante_id');
        $table->unsignedBigInteger('user_id');
        $table->string('nombre_producto');
        $table->dateTime('fecha_compra');
        $table->integer('numero_comprobante');
        $table->float('total_gastado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
