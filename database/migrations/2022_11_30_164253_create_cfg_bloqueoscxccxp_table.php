<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgBloqueoscxccxpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_bloqueoscxccxp', function (Blueprint $table) {
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->double('FK1MCRM_PROSPECTOS')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->string('HORALOCK', 8)->nullable();
            $table->string('HORAUNLOCK', 8)->nullable();
            $table->string('MODULO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_bloqueoscxccxp');
    }
}
