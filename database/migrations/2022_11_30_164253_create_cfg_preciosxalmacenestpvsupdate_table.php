<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgPreciosxalmacenestpvsupdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_preciosxalmacenestpvsupdate', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCFG_ARTICULOSTPVS')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(0);
            $table->double('PCP')->nullable()->default(0);
            $table->string('PVP1')->nullable()->default('0');
            $table->string('PVP2')->nullable()->default('0');
            $table->string('PVP3')->nullable()->default('0');
            $table->string('PVP4')->nullable()->default('0');
            $table->string('PVP5')->nullable()->default('0');
            $table->string('PVP6')->nullable()->default('0');
            $table->string('PVP7')->nullable()->default('0');
            $table->string('PVP8')->nullable()->default('0');
            $table->string('PVP9')->nullable()->default('0');
            $table->string('PVP10')->nullable()->default('0');
            $table->string('PVP1CR')->nullable()->default('0');
            $table->string('PVP2CR')->nullable()->default('0');
            $table->string('PVP3CR')->nullable()->default('0');
            $table->string('PVP4CR')->nullable()->default('0');
            $table->string('PVP5CR')->nullable()->default('0');
            $table->string('PVP6CR')->nullable()->default('0');
            $table->string('PVP7CR')->nullable()->default('0');
            $table->string('PVP8CR')->nullable()->default('0');
            $table->string('PVP9CR')->nullable()->default('0');
            $table->string('PVP10CR')->nullable()->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_preciosxalmacenestpvsupdate');
    }
}
