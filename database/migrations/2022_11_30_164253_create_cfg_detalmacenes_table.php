<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDetalmacenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_detalmacenes', function (Blueprint $table) {
            $table->integer('FK1MCFG_ALMACENES')->nullable();
            $table->string('LATITUD', 500)->nullable();
            $table->string('LONGITUD', 500)->nullable();
            $table->string('FOTO', 500)->nullable();
            $table->decimal('METAMENSUAL', 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_detalmacenes');
    }
}
