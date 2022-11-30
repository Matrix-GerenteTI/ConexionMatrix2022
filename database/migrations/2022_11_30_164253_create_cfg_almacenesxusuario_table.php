<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgAlmacenesxusuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_almacenesxusuario', function (Blueprint $table) {
            $table->double('FK1MCFG_ALMACENES');
            $table->double('FK1MCFG_USUARIOS');
            $table->string('MODULO')->nullable();
            $table->string('SUBMODULO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_almacenesxusuario');
    }
}
