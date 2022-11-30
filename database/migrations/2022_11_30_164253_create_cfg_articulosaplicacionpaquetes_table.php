<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgArticulosaplicacionpaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_articulosaplicacionpaquetes', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCFG_ARTICULOSTPVS')->nullable()->default(0);
            $table->double('FK1MCFG_ARTICULOSAPLICACION')->nullable()->default(0);
            $table->string('ACTIVO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_articulosaplicacionpaquetes');
    }
}
