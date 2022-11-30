<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgCatfirmasprivsaltraspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_catfirmasprivsaltrasp', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->string('CNX')->nullable()->default('');
            $table->double('FK1MCFG_USUARIOSPFIRMA')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENESORI')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENESDTNO')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_catfirmasprivsaltrasp');
    }
}
