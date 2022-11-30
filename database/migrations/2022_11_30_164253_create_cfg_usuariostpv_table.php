<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgUsuariostpvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_usuariostpv', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->double('FK1MBAR_TPVZONASMESAS')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_usuariostpv');
    }
}
