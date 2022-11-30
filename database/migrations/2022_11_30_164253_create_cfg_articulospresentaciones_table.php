<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgArticulospresentacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_articulospresentaciones', function (Blueprint $table) {
            $table->double('FK1MCFG_ARTICULOS')->nullable()->default(0);
            $table->string('DESCRIPPRESENTACION')->nullable()->default('');
            $table->double('FACTORE')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_articulospresentaciones');
    }
}
