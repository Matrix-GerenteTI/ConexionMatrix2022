<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxcHistorccdetfactengrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxc_historccdetfactengrupo', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FKPADCXC_HISTORCC')->nullable()->default(0);
            $table->date('FECHAMOVI')->nullable();
            $table->string('CONCEPTO')->nullable()->default('');
            $table->string('NUMDOCUMENTO')->nullable()->default('');
            $table->string('COMENTARIO')->nullable()->default('');
            $table->double('IMPORTEFACTU')->nullable()->default(0);
            $table->double('IMPORTECOBRO')->nullable()->default(0);
            $table->string('SECCION')->nullable()->default('');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->double('FK1MCRM_PROSPECTOS')->nullable()->default(0);
            $table->string('DOCUMENTADO')->nullable()->default('');
            $table->double('FK1MCFG_VENDEDORES')->nullable()->default(0);
            $table->string('NOMVENDEDOR')->nullable()->default('');
            $table->double('FK11CFG_CABDOCTOS')->nullable()->default(0);
            $table->double('FK11CFG_CABDOCTOS2')->nullable()->default(0);
            $table->double('PORCIVA')->nullable()->default(0);
            $table->double('FK11PEDIDOID')->nullable()->default(0);
            $table->date('FECHATRASP')->nullable();
            $table->string('CONDVTA')->nullable()->default('');
            $table->double('FK1MCFG_VENDEDORES2')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxc_historccdetfactengrupo');
    }
}
