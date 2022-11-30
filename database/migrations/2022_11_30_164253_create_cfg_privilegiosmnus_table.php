<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgPrivilegiosmnusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_privilegiosmnus', function (Blueprint $table) {
            $table->double('FKPADCFG_USUARIOS')->nullable()->default(0);
            $table->string('ACCESOAOBJETO')->nullable()->default('');
            $table->string('EVENTOSENOBJETO')->nullable()->default('');
            $table->string('MODULO')->nullable()->default('');
            $table->string('DESCRIPCIONOPCION')->nullable()->default('');
            $table->string('PERMITIR')->nullable()->default('');
            $table->double('ID')->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_privilegiosmnus');
    }
}
