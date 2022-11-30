<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgMasdatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_masdatos', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FK11PADID')->nullable()->default(0);
            $table->string('CAMPO1')->nullable()->default('');
            $table->string('CAMPO2')->nullable()->default('');
            $table->string('CAMPO3')->nullable()->default('');
            $table->string('CAMPO4')->nullable()->default('');
            $table->string('CAMPO5')->nullable()->default('');
            $table->string('CAMPO6')->nullable()->default('');
            $table->string('CAMPO7')->nullable()->default('');
            $table->string('CAMPO8')->nullable()->default('');
            $table->date('CAMPO9')->nullable();
            $table->date('CAMPO10')->nullable();
            $table->string('CAMPO11')->nullable()->default('');
            $table->string('CAMPO12')->nullable()->default('');
            $table->string('ORIGEN')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_masdatos');
    }
}
