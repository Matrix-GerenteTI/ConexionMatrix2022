<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgSalidaselectronicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_salidaselectronicas', function (Blueprint $table) {
            $table->string('SUCDTNO')->nullable();
            $table->string('USERE')->nullable();
            $table->string('PWDE')->nullable();
            $table->string('ALMDTNO')->nullable();
            $table->double('ALMDTNOID')->nullable()->default(0);
            $table->string('CORREODTNO')->nullable();
            $table->string('ACTUALIZACATARTICULOS')->nullable()->default('');
            $table->double('ALMORIIDLOCAL')->nullable()->default(0);
            $table->double('ALMDTNOIDLOCAL')->nullable()->default(0);
            $table->string('TIPOMOVTO')->nullable()->default('');
            $table->string('RESTRINGIRAMOVTO')->nullable()->default('');
            $table->double('CTEIDLOCAL')->nullable()->default(0);
            $table->double('CTEIDDTNO')->nullable()->default(0);
            $table->string('RESTRINGIRAPEDIDOINTERNO')->nullable()->default('');
            $table->string('MCAIDENTIDADDTNO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_salidaselectronicas');
    }
}
