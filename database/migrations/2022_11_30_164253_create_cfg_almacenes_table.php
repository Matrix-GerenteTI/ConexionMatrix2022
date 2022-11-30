<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgAlmacenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_almacenes', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('DESCRIPCION')->nullable()->default('');
            $table->string('ACTIVO')->nullable()->default('');
            $table->string('PWD')->nullable()->default('');
            $table->string('ZONA')->nullable()->default('');
            $table->string('FACTORK')->nullable()->default('');
            $table->string('TPVREM')->nullable()->default('');
            $table->string('ALMSEGURO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_almacenes');
    }
}
