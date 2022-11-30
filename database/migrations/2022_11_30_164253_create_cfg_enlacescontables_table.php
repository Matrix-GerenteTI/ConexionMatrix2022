<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgEnlacescontablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_enlacescontables', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('TIPOPOLIZA')->nullable()->default('');
            $table->string('CONCEPTO1')->nullable()->default('');
            $table->string('CONCEPTO2')->nullable()->default('');
            $table->string('CONCEPTO3')->nullable()->default('');
            $table->string('CONCEPTO4')->nullable()->default('');
            $table->string('CONCEPTO5')->nullable()->default('');
            $table->string('CUENTA')->nullable()->default('');
            $table->string('CARGOABONO')->nullable()->default('');
            $table->string('OBSERVACIONES')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_enlacescontables');
    }
}
