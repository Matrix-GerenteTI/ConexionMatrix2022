<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgCfdistryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_cfdistry', function (Blueprint $table) {
            $table->string('RUTACFDIPDF')->nullable()->default('');
            $table->string('RUTAXMLPROCESADO')->nullable()->default('');
            $table->double('IDUSUARIO')->nullable()->default(0);
            $table->text('CONTENIDOFICHERO')->nullable();
            $table->string('ORIGEN')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_cfdistry');
    }
}
