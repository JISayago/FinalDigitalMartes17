<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('comprobantes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');

        });

        Schema::table('productos', function (Blueprint $table) {
            $table->foreign('marca_id')->references('marca_id')->on('marcas');
            $table->foreign('categoria_id')->references('categoria_id')->on('categorias');
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
