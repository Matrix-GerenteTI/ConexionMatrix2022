<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPedpreliqapartadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_pedpreliqapartado', function (Blueprint $table) {
            $table->double('FK1MREF_PADPRE')->nullable()->default(0);
            $table->double('FK1MREF_PADPREABONOANT')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_pedpreliqapartado');
    }
}
