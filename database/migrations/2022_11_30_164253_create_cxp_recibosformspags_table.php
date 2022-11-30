<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxpRecibosformspagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxp_recibosformspags', function (Blueprint $table) {
            $table->double('FK1MCXP_HISTORCP');
            $table->string('FORMAPAGO')->nullable()->default('');
            $table->double('IMPORTE')->nullable()->default(0);
            $table->string('REFERENCIA')->nullable()->default('');
            $table->string('CHEQUENO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxp_recibosformspags');
    }
}
