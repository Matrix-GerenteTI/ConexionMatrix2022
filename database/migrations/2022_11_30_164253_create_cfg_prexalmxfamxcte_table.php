<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgPrexalmxfamxcteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_prexalmxfamxcte', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(0);
            $table->string('FAMILIA')->nullable()->default('');
            $table->double('PVP1')->nullable()->default(0);
            $table->double('PVP2')->nullable()->default(0);
            $table->double('PVP3')->nullable()->default(0);
            $table->double('PVP4')->nullable()->default(0);
            $table->double('PVP5')->nullable()->default(0);
            $table->double('PVP6')->nullable()->default(0);
            $table->double('PVP7')->nullable()->default(0);
            $table->double('PVP8')->nullable()->default(0);
            $table->double('PVP9')->nullable()->default(0);
            $table->double('PVP10')->nullable()->default(0);
            $table->string('ALMACEN')->nullable()->default('');
            $table->string('FK1MCRM_PROSPECTOS')->nullable()->default('0');
            $table->string('CTE')->nullable()->default('');
            $table->string('CTOPROMBASE')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_prexalmxfamxcte');
    }
}
