<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgNivelesxalmacenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_nivelesxalmacenes', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->double('NIVEL')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_nivelesxalmacenes');
    }
}
