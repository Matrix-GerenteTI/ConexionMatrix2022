<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgPrexctexartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_prexctexart', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('ID_PROSPECTO')->nullable()->default(0);
            $table->double('IDCFG_ARTICULOS')->nullable()->default(0);
            $table->double('PVP1')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_prexctexart');
    }
}
