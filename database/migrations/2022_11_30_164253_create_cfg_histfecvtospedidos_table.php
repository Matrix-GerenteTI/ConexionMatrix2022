<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgHistfecvtospedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_histfecvtospedidos', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MREF_PEDIDOSPRESUP')->nullable()->default(0);
            $table->double('FK1MCFG_DOCTOS')->nullable()->default(0);
            $table->date('FECHAFACT')->nullable();
            $table->date('FECHAVTO')->nullable();
            $table->double('DIASCREDITO')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_histfecvtospedidos');
    }
}
