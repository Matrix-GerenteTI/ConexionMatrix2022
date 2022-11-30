<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefDetpedidospresupconseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_detpedidospresupconse', function (Blueprint $table) {
            $table->double('FKPADREF_PEDIDOSPRESUP')->nullable()->default(0);
            $table->string('NUMDOCTO')->nullable();
            $table->date('FECHA')->nullable();
            $table->string('NOMUSUARIO')->nullable();
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->string('HORA')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_detpedidospresupconse');
    }
}
