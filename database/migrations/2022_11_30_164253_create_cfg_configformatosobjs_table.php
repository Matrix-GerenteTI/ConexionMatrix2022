<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgConfigformatosobjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_configformatosobjs', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FKPADCFG_CONFIGFORMATOS')->nullable()->default(0);
            $table->string('NOMTABLA')->nullable()->default('');
            $table->string('ETIQCAMPOS')->nullable()->default('');
            $table->string('VISIBLEETIQCAMPO')->nullable()->default('');
            $table->string('MARGENXETIQCAMPO')->nullable()->default('');
            $table->string('MARGENYETIQCAMPO')->nullable()->default('');
            $table->string('LONGETIQCAMPO')->nullable()->default('');
            $table->string('NOMCAMPO')->nullable()->default('');
            $table->string('VISIBLENOMCAMPO')->nullable()->default('');
            $table->string('MARGENXNOMCAMPO')->nullable()->default('');
            $table->string('MARGENYNOMCAMPO')->nullable()->default('');
            $table->string('LONGNOMCAMPO')->nullable()->default('');
            $table->string('DISTRIBUCION')->nullable()->default('');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_configformatosobjs');
    }
}
