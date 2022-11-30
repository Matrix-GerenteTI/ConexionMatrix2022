<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgCatfirmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_catfirmas', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('AUTORIZACIONAFIRMA', 1000)->nullable()->default('');
            $table->string('AUTORIZACIONAFIRMATODASCNX', 1000)->nullable()->default('');
            $table->string('VALORPTITULOFIRMA', 1000)->nullable()->default('');
            $table->string('VALORPAUTORIZACION')->nullable()->default('');
            $table->string('MODULO')->nullable()->default('');
            $table->string('ACTIVO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_catfirmas');
    }
}
