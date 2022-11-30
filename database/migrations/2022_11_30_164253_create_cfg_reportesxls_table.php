<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgReportesxlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_reportesxls', function (Blueprint $table) {
            $table->double('ID_USUARIO');
            $table->string('MODULO')->nullable()->default('');
            $table->string('NOMBREREPORTE')->nullable()->default('');
            $table->string('NOMBREARCHIVO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_reportesxls');
    }
}
