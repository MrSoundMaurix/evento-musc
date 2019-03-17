<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspaciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacios', function (Blueprint $table) {
            $table->increments('esp_id');
            $table->string('esp_nombre',200);
            $table->integer('esp_capacidad');
            $table->text('esp_foto')->nullable()->default(NULL);
            $table->text('esp_fototype')->nullable()->default(NULL);
            $table->timestamp('esp_created_at');
            $table->timestamp('esp_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espacios');
    }
}
