<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgConfigformatosqrysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_configformatosqrys', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FKPADCFG_CONFIGFORMATOS')->nullable()->default(0);
            $table->text('QRYFORMATO')->nullable()->default('');
            $table->double('MAXLINEDETALLE')->nullable()->default(0);
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->string('ORIENTACIONPAPEL')->nullable()->default('');
            $table->string('TAMANOPAPEL')->nullable()->default('');
            $table->string('LONGHORIZONTAL')->nullable()->default('');
            $table->string('LONGVERTICAL')->nullable()->default('');
            $table->string('TIPOLETRA')->nullable()->default('');
            $table->string('TAMANOLETRA')->nullable()->default('');
            $table->string('CABECEROCMS')->nullable()->default('');
            $table->string('PIEDEPAGCMS')->nullable()->default('');
            $table->string('INVOCARPLANTILLARPTEXTERNA')->nullable()->default('');
            $table->string('IMPRIMIRINMEDIATAMENTE')->nullable()->default('');
            $table->string('APLICARFORMATOPAQ')->nullable()->default('');
            $table->text('XMLFORMATOCFD')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_configformatosqrys');
    }
}
