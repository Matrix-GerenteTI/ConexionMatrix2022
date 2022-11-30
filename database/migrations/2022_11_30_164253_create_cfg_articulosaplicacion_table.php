<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgArticulosaplicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_articulosaplicacion', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('TIPVEHMAQ')->nullable()->default('');
            $table->string('MARCA')->nullable()->default('');
            $table->string('MODELO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_articulosaplicacion');
    }
}
