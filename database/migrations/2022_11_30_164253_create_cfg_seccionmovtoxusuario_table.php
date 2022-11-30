<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgSeccionmovtoxusuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_seccionmovtoxusuario', function (Blueprint $table) {
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(0);
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->string('MODULO')->nullable()->default('');
            $table->string('SUBMODULO')->nullable()->default('');
            $table->string('VALORTIPOOPERACION')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_seccionmovtoxusuario');
    }
}
