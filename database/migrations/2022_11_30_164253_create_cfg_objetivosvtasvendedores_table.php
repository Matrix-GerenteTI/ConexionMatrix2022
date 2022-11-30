<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgObjetivosvtasvendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_objetivosvtasvendedores', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FKPADCFG_VENDEDORES')->nullable()->default(0);
            $table->double('ANYO')->nullable()->default(0);
            $table->double('MES1')->nullable()->default(0);
            $table->double('MES2')->nullable()->default(0);
            $table->double('MES3')->nullable()->default(0);
            $table->double('MES4')->nullable()->default(0);
            $table->double('MES5')->nullable()->default(0);
            $table->double('MES6')->nullable()->default(0);
            $table->double('MES7')->nullable()->default(0);
            $table->double('MES8')->nullable()->default(0);
            $table->double('MES9')->nullable()->default(0);
            $table->double('MES10')->nullable()->default(0);
            $table->double('MES11')->nullable()->default(0);
            $table->double('MES12')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_objetivosvtasvendedores');
    }
}
