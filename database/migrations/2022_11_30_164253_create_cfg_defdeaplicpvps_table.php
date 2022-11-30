<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDefdeaplicpvpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_defdeaplicpvps', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(0);
            $table->string('FK1MCRM_PROSPECTOS')->nullable()->default('0');
            $table->string('TABLAORIGEN')->nullable()->default('');
            $table->string('PVP1')->nullable()->default('');
            $table->string('PVP2')->nullable()->default('');
            $table->string('PVP3')->nullable()->default('');
            $table->string('PVP4')->nullable()->default('');
            $table->string('PVP5')->nullable()->default('');
            $table->string('PVP6')->nullable()->default('');
            $table->string('PVP7')->nullable()->default('');
            $table->string('PVP8')->nullable()->default('');
            $table->string('PVP9')->nullable()->default('');
            $table->string('PVP10')->nullable()->default('');
            $table->double('DTO1')->nullable()->default(0);
            $table->string('FEDTO1')->nullable()->default('');
            $table->double('DTO2')->nullable()->default(0);
            $table->string('FEDTO2')->nullable()->default('');
            $table->double('DTO3')->nullable()->default(0);
            $table->string('FEDTO3')->nullable()->default('');
            $table->double('DTO4')->nullable()->default(0);
            $table->string('FEDTO4')->nullable()->default('');
            $table->string('FEDTOPVP10')->nullable()->default('');
            $table->string('LUN')->nullable()->default('');
            $table->string('MAR')->nullable()->default('');
            $table->string('MIE')->nullable()->default('');
            $table->string('JUE')->nullable()->default('');
            $table->string('VIE')->nullable()->default('');
            $table->string('SAB')->nullable()->default('');
            $table->string('DOM')->nullable()->default('');
            $table->date('FECINIAPLIC')->nullable();
            $table->date('FECFINAPLIC')->nullable();
            $table->date('FECALTA')->nullable();
            $table->string('ACTIVO')->nullable()->default('');
            $table->string('HORAALTA')->nullable()->default('');
            $table->string('HORABAJA')->nullable()->default('');
            $table->double('FK1MCFG_USUARIOSALTA')->nullable()->default(-1);
            $table->double('FK1MCFG_USUARIOSBAJA')->nullable()->default(-1);
            $table->date('FECBAJA')->nullable();
            $table->double('FK1MCFG_ALMACENESPVP')->nullable()->default(-1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_defdeaplicpvps');
    }
}
