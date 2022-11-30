<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgCajasdetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_cajasdet', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FKPADCFG_CAJAS')->nullable()->default(0);
            $table->string('FORMAPAGO')->nullable()->default('');
            $table->double('IMPORTE')->nullable()->default(0);
            $table->string('REFERENCIA')->nullable()->default('');
            $table->string('TIPOCORTETURNO')->nullable()->default('');
            $table->double('FK1MCFG_USUARIOSAUTRP')->nullable()->default(-1);
            $table->string('HORARP')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_cajasdet');
    }
}
