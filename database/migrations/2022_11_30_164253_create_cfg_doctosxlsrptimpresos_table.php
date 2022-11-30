<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDoctosxlsrptimpresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_doctosxlsrptimpresos', function (Blueprint $table) {
            $table->date('FECHA')->nullable();
            $table->time('HORA')->nullable();
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->double('DOCTOID')->nullable()->default(0);
            $table->string('NUMDOCTO')->nullable();
            $table->string('PLANTILLAXLSRPT')->nullable();
            $table->string('STATUS')->nullable()->default('');
            $table->string('MODULO')->nullable()->default('');
            $table->string('A1')->nullable()->default('');
            $table->string('A2')->nullable()->default('');
            $table->string('A3')->nullable()->default('');
            $table->string('A4')->nullable()->default('');
            $table->string('A5')->nullable()->default('');
            $table->string('B1')->nullable()->default('');
            $table->string('B2')->nullable()->default('');
            $table->string('B3')->nullable()->default('');
            $table->string('B4')->nullable()->default('');
            $table->string('B5')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_doctosxlsrptimpresos');
    }
}
