<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->increments('ins_id');
            $table->string('ins_cedula',50)->unique();
            $table->string('ins_nombres',50);
            $table->string('ins_apellidos',50);
            $table->string('ins_email',50)->unique();
            $table->string('ins_pais',50);
            $table->string('ins_cv',1000)->nullable()->default(null);
            $table->string('ins_cvtype',1000)->nullable()->default(null);
            $table->string('ins_foto',1000)->nullable()->default(null);
            $table->string('ins_fototype',20)->nullable()->default(null);
            $table->timestamp('ins_created_at');
            $table->timestamp('ins_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructores');
    }
}
