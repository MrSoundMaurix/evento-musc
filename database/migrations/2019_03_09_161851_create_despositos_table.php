<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespositosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depositos', function (Blueprint $table) {
            $table->increments('id_deposito');
            $table->string('nro_deposito')->unique();
            $table->text('pro_foto');
            $table->integer('id_usuario')->nullable();
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return v
     */
    public function down()
    {
        Schema::dropIfExists('depositos');
    }
}