<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_familias', function (Blueprint $table) {
            $table->string('FAMILIA', 300)->nullable();
            $table->decimal('METASEMANAL', 9)->nullable();
            $table->decimal('METADIARIA', 9)->nullable();
            $table->decimal('METAMENSUAL', 9)->nullable();
            $table->integer('FK1MCFG_ALMACENES')->nullable();
            $table->decimal('PRESUPUESTO', 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_familias');
    }
}
