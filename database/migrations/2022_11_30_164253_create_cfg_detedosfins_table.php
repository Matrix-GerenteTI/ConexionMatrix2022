<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDetedosfinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_detedosfins', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('NOMHOJA')->nullable()->default('');
            $table->string('MESACT')->nullable()->default('');
            $table->string('MESACUM')->nullable()->default('');
            $table->string('CTACONTABLE')->nullable()->default('');
            $table->string('CAMBIASIGNO')->nullable()->default('');
            $table->string('PRORRATEO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_detedosfins');
    }
}
