<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmtorderCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pmtorder_campos', function (Blueprint $table) {
            $table->integer('ID_CAMPO')->nullable();
            $table->integer('ID_TABLA')->nullable();
            $table->string('CAM_NOMBRE', 10)->nullable();
            $table->string('CAM_TIPO', 25)->nullable();
            $table->string('CAM_LONG', 3)->nullable();
            $table->string('CAM_DECI', 1)->nullable();
            $table->string('CAM_KEY', 2)->nullable();
            $table->string('CAM_LONGTOTAL', 3)->nullable();
            $table->string('CAM_EMPTY', 2)->nullable();
            $table->string('CAM_DESCRIP', 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pmtorder_campos');
    }
}
