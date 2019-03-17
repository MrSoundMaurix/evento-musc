<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferencias', function (Blueprint $table) {
            $table->increments('con_id');
            $table->integer('ins_id');
            $table->string('con_tema',500);
            $table->integer('esp_id');
            $table->date('con_fecha');
            $table->time('con_horainicio');
            $table->time('con_horafin');
            $table->timestamp('con_created_at');
            $table->timestamp('con_updated_at');
            $table->foreign('esp_id')->references('esp_id')->on('espacios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conferencias');
    }
}
