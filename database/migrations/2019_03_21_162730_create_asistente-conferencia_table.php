<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenteConferenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistente-conferencia', function (Blueprint $table) {
            $table->increments('asc_id');
            $table->integer('usu_id');
            $table->integer('con_id');
            $table->string('asc_nrodocumento',30);            
            $table->text('asc_foto')->nullable()->default(NULL);
            $table->text('asc_fototype')->nullable()->default(NULL);
            $table->timestamp('asc_created_at');
            $table->timestamp('asc_updated_at');
            $table->foreign('usu_id')->references('id')->on('users');
            $table->foreign('con_id')->references('con_id')->on('conferencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistente-conferencia');
    }
}
