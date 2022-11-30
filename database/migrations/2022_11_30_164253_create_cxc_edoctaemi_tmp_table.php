<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxcEdoctaemiTmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxc_edoctaemi_tmp', function (Blueprint $table) {
            $table->double('HID');
            $table->string('HNUMDOCUMENTO')->nullable()->default('');
            $table->string('HCONCEPTO')->nullable()->default('');
            $table->date('HFECHAMOVI')->nullable();
            $table->double('HIMPORTEFACTU')->nullable();
            $table->string('HCOMENTARIO')->nullable()->default('');
            $table->string('HSECCION')->nullable()->default('');
            $table->string('RNUMERO')->nullable()->default('');
            $table->string('RNUMANTICIPO')->nullable()->default('');
            $table->string('RCONCEPTOREAL')->nullable()->default('');
            $table->date('RFECHAEMISION')->nullable();
            $table->date('RFECHAVTO')->nullable();
            $table->date('RFECHACOBRO')->nullable();
            $table->double('RIMPORTE')->nullable();
            $table->string('RREC_PAGADO')->nullable()->default('');
            $table->string('RORIGEN')->nullable()->default('');
            $table->string('RTIPOCLIENTE')->nullable()->default('');
            $table->date('RFECHA')->nullable();
            $table->string('HUSUARIO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxc_edoctaemi_tmp');
    }
}
