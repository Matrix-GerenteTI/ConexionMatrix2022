<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmtorderConcoldescripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pmtorder_concoldescrip', function (Blueprint $table) {
            $table->integer('ID_CONEXION')->nullable();
            $table->string('COL_NUMCOL', 3)->nullable();
            $table->string('COL_NOMCAMPO', 25)->nullable();
            $table->string('COL_DESCRIP', 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pmtorder_concoldescrip');
    }
}
