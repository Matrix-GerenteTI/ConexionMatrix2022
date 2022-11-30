<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDistescenario2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_distescenario2', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->text('QRY')->nullable();
            $table->date('FECHA')->nullable();
            $table->time('HORA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_distescenario2');
    }
}
