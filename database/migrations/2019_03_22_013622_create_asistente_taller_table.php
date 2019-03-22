<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenteTallerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistente_taller', function (Blueprint $table) {
            $table->integer('asi_id');
            $table->integer('tal_id');
            $table->timestamp('ut_created_at');
            $table->timestamp('ut_updated_at');
            $table->primary(['asi_id', 'tal_id']);
            $table->foreign('asi_id')->references('id')->on('users');
            $table->foreign('tal_id')->references('tal_id')->on('talleres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistente_taller');
    }
}
