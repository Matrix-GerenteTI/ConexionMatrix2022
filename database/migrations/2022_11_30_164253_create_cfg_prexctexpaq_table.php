<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgPrexctexpaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_prexctexpaq', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('ID_PROSPECTO')->nullable()->default(0);
            $table->double('IDCFG_ARTICULOSTPVS')->nullable()->default(0);
            $table->double('PVP1')->nullable()->default(0);
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
        Schema::dropIfExists('cfg_prexctexpaq');
    }
}
