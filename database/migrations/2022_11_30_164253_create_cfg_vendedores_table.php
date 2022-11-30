<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_vendedores', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('NOMBREVENDEDOR')->nullable()->default('');
            $table->string('SUBSISTEMA')->nullable()->default('');
            $table->double('CODPUNTODEVENTA')->nullable()->default(0);
            $table->string('ACTIVO')->nullable()->default('');
            $table->string('CELULAR')->nullable()->default('');
            $table->string('EMAIL')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_vendedores');
    }
}
