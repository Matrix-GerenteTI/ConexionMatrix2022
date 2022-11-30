<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxcRecibosdatoscfdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxc_recibosdatoscfdi', function (Blueprint $table) {
            $table->double('FK1MCXC_HISTORCC');
            $table->string('UUIDORIGEN')->nullable()->default('');
            $table->string('DOCTO')->nullable()->default('');
            $table->string('NUMPARCIALIDAD')->nullable()->default('');
            $table->string('IMPSALDOANT')->nullable()->default('');
            $table->string('IMPPAGADO')->nullable()->default('');
            $table->string('IMPSALDOINSOLUTO')->nullable()->default('');
            $table->string('BANCO')->nullable()->default('');
            $table->string('RFCEMISORCTAORD')->nullable()->default('');
            $table->string('CTAORDENANTE')->nullable()->default('');
            $table->string('RFCEMISORCTABEN')->nullable()->default('');
            $table->string('CTABENEFICIARIO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxc_recibosdatoscfdi');
    }
}
