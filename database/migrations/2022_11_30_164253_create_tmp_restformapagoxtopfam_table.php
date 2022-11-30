<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmpRestformapagoxtopfamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmp_restformapagoxtopfam', function (Blueprint $table) {
            $table->double('IDUSUARIO');
            $table->string('FAMILIA')->nullable()->default('');
            $table->string('OPERACION')->nullable()->default('');
            $table->date('FECHA')->nullable();
            $table->double('IMPORTE')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmp_restformapagoxtopfam');
    }
}
