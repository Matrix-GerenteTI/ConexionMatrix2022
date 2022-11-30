<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgArticulossatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_articulossat', function (Blueprint $table) {
            $table->string('CODIGOARTICULO')->nullable()->default('');
            $table->string('DESCRIPCION')->nullable()->default('');
            $table->string('TIPO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_articulossat');
    }
}
