<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgMeserosxcajeroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_meserosxcajero', function (Blueprint $table) {
            $table->double('FKPADCFG_USUARIOS')->nullable()->default(0);
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_meserosxcajero');
    }
}
