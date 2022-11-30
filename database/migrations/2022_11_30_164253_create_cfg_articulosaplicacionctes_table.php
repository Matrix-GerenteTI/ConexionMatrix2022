<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgArticulosaplicacionctesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_articulosaplicacionctes', function (Blueprint $table) {
            $table->double('FK1MCRM_PROSPECTOS')->nullable()->default(0);
            $table->double('FK1MCFG_ARTICULOSAPLICACION')->nullable()->default(0);
            $table->string('SERIETIPVEHMAQ')->nullable()->default('');
            $table->string('SERIEMOTOR')->nullable()->default('');
            $table->string('OBSADIC')->nullable()->default('');
            $table->string('PLACA')->nullable()->default('');
            $table->string('NOECONOMICO')->nullable()->default('');
            $table->string('MOTOR')->nullable()->default('');
            $table->string('KMS')->nullable()->default('');
            $table->string('TRANSMISION')->nullable()->default('');
            $table->string('COLEXT')->nullable()->default('');
            $table->string('COLINT')->nullable()->default('');
            $table->string('TIPVEST')->nullable()->default('');
            $table->double('ID')->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_articulosaplicacionctes');
    }
}
