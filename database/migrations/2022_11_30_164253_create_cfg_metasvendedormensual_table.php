<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgMetasvendedormensualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_metasvendedormensual', function (Blueprint $table) {
            $table->integer('CODIGOVENDEDOR')->nullable();
            $table->float('IMPORTE', 10, 0)->nullable()->default(0);
            $table->integer('ALINEACIONES')->nullable();
            $table->float('BONOIMPORTE', 10, 0)->nullable()->default(0);
            $table->float('BONOALINEACIONES', 10, 0)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_metasvendedormensual');
    }
}
