<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgAlmacenesxarticulostpvsupdaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_almacenesxarticulostpvsupda', function (Blueprint $table) {
            $table->double('FK1MCFG_ALMACENES');
            $table->double('FK1MCFG_ARTICULOSTPVS');
            $table->string('LUNES')->nullable()->default('');
            $table->string('MARTES')->nullable()->default('');
            $table->string('MIERCOLES')->nullable()->default('');
            $table->string('JUEVES')->nullable()->default('');
            $table->string('VIERNES')->nullable()->default('');
            $table->string('SABADO')->nullable()->default('');
            $table->string('DOMINGO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_almacenesxarticulostpvsupda');
    }
}
