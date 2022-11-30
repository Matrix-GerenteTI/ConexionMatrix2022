<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgPerfilesdtosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_perfilesdtos', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FK1MCRM_PROSPECTOS')->nullable()->default(0);
            $table->double('FK1MCFG_ARTICULOS')->nullable()->default(0);
            $table->double('FK1MCFG_OPERACIONES')->nullable()->default(0);
            $table->string('SUBSISTEMA')->nullable()->default('');
            $table->string('SECCION')->nullable()->default('');
            $table->string('CVEDTO')->nullable()->default('');
            $table->double('PORC')->nullable()->default(0);
            $table->double('IMPORTE')->nullable()->default(0);
            $table->string('STATUS')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_perfilesdtos');
    }
}
