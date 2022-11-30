<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgAlmacenesTpvremTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_almacenes_tpvrem', function (Blueprint $table) {
            $table->double('ID');
            $table->string('DESCRIPCION')->nullable()->default('');
            $table->string('ACTIVO')->nullable()->default('');
            $table->string('PWD')->nullable()->default('');
            $table->string('ZONA')->nullable()->default('');
            $table->string('FACTORK')->nullable()->default('');
            $table->string('TPVREM')->nullable()->default('');
            $table->string('DSN')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_almacenes_tpvrem');
    }
}
