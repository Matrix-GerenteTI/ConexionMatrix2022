<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgEdosfinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_edosfins', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('NOMBREXLS')->nullable()->default('');
            $table->string('RUTA')->nullable()->default('');
            $table->string('FILAINICIO')->nullable()->default('');
            $table->string('FILAFINAL')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_edosfins');
    }
}
