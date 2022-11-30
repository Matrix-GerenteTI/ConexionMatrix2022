<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDetarticulostpvsupdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_detarticulostpvsupdate', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FKPADCFG_ARTICULOSTPVS')->nullable();
            $table->double('FK1MCFG_ARTICULOS')->nullable();
            $table->double('CANTITEMREQ')->nullable();
            $table->double('PVPIVA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_detarticulostpvsupdate');
    }
}
