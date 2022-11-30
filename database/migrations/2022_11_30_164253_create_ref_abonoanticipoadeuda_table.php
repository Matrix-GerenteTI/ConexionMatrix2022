<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefAbonoanticipoadeudaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_abonoanticipoadeuda', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FKPADREF_DEUDAORIGINALAPARTADO')->nullable()->default(0);
            $table->double('FK11REF_PEDIDOSPRESUP')->nullable()->default(0);
            $table->string('ACTIVO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_abonoanticipoadeuda');
    }
}
