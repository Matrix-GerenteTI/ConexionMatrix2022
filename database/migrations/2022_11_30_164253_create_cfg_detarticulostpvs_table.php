<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDetarticulostpvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_detarticulostpvs', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FKPADCFG_ARTICULOSTPVS')->nullable()->default(0);
            $table->double('FK1MCFG_ARTICULOS')->nullable()->default(0);
            $table->double('CANTITEMREQ')->nullable()->default(0);
            $table->double('PVPIVA')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_detarticulostpvs');
    }
}
