<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_cajas', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->string('TURNO')->nullable()->default('');
            $table->double('APERTURAEFECTCAJA')->nullable()->default(0);
            $table->string('STATUS')->nullable()->default('');
            $table->string('HORAAPERTURA')->nullable()->default('');
            $table->string('HORACIERRE')->nullable()->default('');
            $table->double('FK11REF_PEDIDOSPRESUP')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(-1);
            $table->string('VOBOCHECK')->nullable()->default('');
            $table->double('FK1MCFG_USUARIOSLOCK')->nullable()->default(-1);
            $table->double('FK1MCFG_USUARIOSAUTORIZA')->nullable()->default(-1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_cajas');
    }
}
