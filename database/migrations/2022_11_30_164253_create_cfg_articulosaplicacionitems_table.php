<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgArticulosaplicacionitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_articulosaplicacionitems', function (Blueprint $table) {
            $table->double('FK1MCFG_ARTICULOS')->nullable()->default(0);
            $table->double('FK1MCFG_ARTICULOSAPLICACION')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_articulosaplicacionitems');
    }
}
