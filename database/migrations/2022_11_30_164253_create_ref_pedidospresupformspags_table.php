<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPedidospresupformspagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_pedidospresupformspags', function (Blueprint $table) {
            $table->double('FK1MREF_PEDIDOSPRESUP');
            $table->string('FORMAPAGO')->nullable()->default('');
            $table->double('IMPORTE')->nullable()->default(0);
            $table->string('REFERENCIA')->nullable()->default('');
            $table->double('IMPORTEPROPINA')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_pedidospresupformspags');
    }
}
