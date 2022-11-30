<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgValorcamposgenericosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_valorcamposgenericos', function (Blueprint $table) {
            $table->string('NOMBRETABLA')->nullable()->default('');
            $table->string('NOMBRECAMPO')->nullable();
            $table->string('VALOR')->nullable();
            $table->double('FK1MCFG_USUARIOS')->nullable();
            $table->string('MODULO')->nullable();
            $table->double('VALORNUMERICO')->nullable();
            $table->string('INDPARAMETRO')->nullable();
            $table->string('TIPOOPERACION')->nullable()->default('');
            $table->string('STATUS')->nullable()->default('');
            $table->string('SUBMODULO')->nullable()->default('');
            $table->string('CSCID')->nullable()->default('');
            $table->string('VALOR2')->nullable()->default('');
            $table->double('ID');
            $table->string('DESCRIPCION')->nullable()->default('');
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(-1);
            $table->string('SERIE')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_valorcamposgenericos');
    }
}
