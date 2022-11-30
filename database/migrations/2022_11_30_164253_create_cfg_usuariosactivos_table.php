<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgUsuariosactivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_usuariosactivos', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->string('HORAENTRADA')->nullable();
            $table->string('HORASALIDA')->nullable();
            $table->string('USUARIOTERMINAL')->nullable();
            $table->string('PCTERMINAL')->nullable();
            $table->string('RUTAEJECUTABLE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_usuariosactivos');
    }
}
