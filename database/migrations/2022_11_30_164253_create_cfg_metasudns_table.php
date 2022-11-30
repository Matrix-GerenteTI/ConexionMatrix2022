<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgMetasudnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_metasudns', function (Blueprint $table) {
            $table->integer('ID')->nullable();
            $table->integer('FK1MCFG_ALMACENES')->nullable();
            $table->decimal('MENSUAL', 9)->nullable();
            $table->integer('MES')->nullable();
            $table->integer('ANIO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_metasudns');
    }
}
