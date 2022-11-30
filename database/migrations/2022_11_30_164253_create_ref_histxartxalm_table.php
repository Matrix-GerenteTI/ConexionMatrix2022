<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefHistxartxalmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_histxartxalm', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FK1MREF_ARTXALMACEN')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->string('TIPOMOV')->nullable()->default('');
            $table->double('FK1MCFG_DOCTOS')->nullable()->default(0);
            $table->double('CANTIDAD')->nullable()->default(0);
            $table->double('COSTO')->nullable()->default(0);
            $table->double('FK1MREF_PEDIDOSPRESUP')->nullable()->default(0);
            $table->double('FK1MREF_COMPRASTRASPREGS')->nullable()->default(0);
            $table->double('FK1MSER_ORDENESPRESUP')->nullable()->default(0);
            $table->string('FACTENNEG')->nullable()->default('');
            $table->double('CTOPROMEDIO')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_histxartxalm');
    }
}
