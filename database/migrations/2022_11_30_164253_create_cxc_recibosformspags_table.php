<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxcRecibosformspagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxc_recibosformspags', function (Blueprint $table) {
            $table->double('FK1MCXC_HISTORCC');
            $table->string('FORMAPAGO')->nullable()->default('');
            $table->double('IMPORTE')->nullable()->default(0);
            $table->string('REFERENCIA')->nullable()->default('');
            $table->string('NUMRECIBOFIS')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxc_recibosformspags');
    }
}
