<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalleresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talleres', function (Blueprint $table) {
            $table->increments('tal_id');
            $table->string('tal_tema',500)->unique();
            $table->string('tal_resumen',5000)->nullable()->default(NULL);
            $table->boolean('tal_estado',true|false)->default(true);
            $table->date('tal_fecha');
            $table->time('tal_horainicio');
            $table->time('tal_horafin');
            $table->string('tal_materiales',5000)->nullable()->default(NULL);
            $table->string('tal_cprevios',5000)->nullable()->default(NULL);
            $table->text('tal_foto')->nullable()->default(NULL);
            $table->text('tal_fototype')->nullable()->default(NULL);
            $table->integer('cat_id');
            $table->integer('esp_id')->nullable()->default(NULL);
            $table->integer('ins_id');
            $table->timestamp('tal_created_at')->default(now());
            $table->timestamp('tal_updated_at')->default(now());
            $table->foreign('cat_id')->references('cat_id')->on('categorias');
            $table->foreign('esp_id')->references('esp_id')->on('espacios');
            $table->foreign('ins_id')->references('ins_id')->on('instructores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talleres');
    }
}
