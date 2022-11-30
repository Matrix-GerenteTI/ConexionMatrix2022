<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgCaptacionradiocomandaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_captacionradiocomanda', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->double('FK1MCFG_ARTICULOSTPVS')->nullable()->default(0);
            $table->double('FK1MBAR_TPVZONASMESAS')->nullable()->default(0);
            $table->string('FK1MBAR_TPVZONASMESASDTNO')->nullable()->default('');
            $table->string('ACCION')->nullable()->default('');
            $table->double('CANT')->nullable()->default(0);
            $table->string('SUGERENCIA')->nullable()->default('');
            $table->date('FECHA')->nullable();
            $table->string('HORA')->nullable()->default('');
            $table->string('STATUS')->nullable()->default('');
            $table->string('OBSERV')->nullable()->default('');
            $table->double('NOCOMENSALES')->nullable()->default(0);
            $table->string('CLIENTIDCLP')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_captacionradiocomanda');
    }
}
