<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefDeudaoriginalapartadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_deudaoriginalapartado', function (Blueprint $table) {
            $table->double('ID');
            $table->double('CARGORIDEUDA')->nullable()->default(0);
            $table->date('FECHPOSIBLELIQ')->nullable();
            $table->string('OBSERVACIONES')->nullable()->default('');
            $table->string('ACTIVO')->nullable()->default('');
            $table->double('FK1MCRM_PROSPECTOS')->nullable()->default(0);
            $table->date('FECHACREACION')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_deudaoriginalapartado');
    }
}
