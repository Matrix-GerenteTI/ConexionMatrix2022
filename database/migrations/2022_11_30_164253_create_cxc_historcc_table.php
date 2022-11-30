<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxcHistorccTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxc_historcc', function (Blueprint $table) {
            $table->double('ID')->primary();
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
            $table->string('FACTENGRUPO')->nullable()->default('');
            $table->string('CONDVTA')->nullable()->default('');
            $table->double('FK1MCFG_VENDEDORES2')->nullable()->default(0);
            $table->text('FIRMA')->nullable()->default('');
            $table->text('SELLO')->nullable()->default('');
            $table->text('WSSELLOSAT')->nullable()->default('');
            $table->string('WSNOCERTIFICADOSAT')->nullable()->default('');
            $table->text('WSSELLOCFD')->nullable()->default('');
            $table->string('WSFECHATIMBRADO')->nullable()->default('');
            $table->string('WSUUID')->nullable()->default('');
            $table->string('WSNAMEXMLTIMBRADO')->nullable()->default('');
            $table->text('WSBODYXMLTIMBRADO')->nullable()->default('');
            $table->text('WSBODYXMLSTRINGORIGINAL')->nullable()->default('');
            $table->string('WSRUTAPDFGENERADO')->nullable()->default('');
            $table->string('DETEXTRA')->nullable()->default('');
            $table->string('MOVTOELECTRONICO')->nullable()->default('');
            $table->string('METODOPAGO')->nullable()->default('');
            $table->string('NCTAPAGO')->nullable()->default('');
            $table->string('PYM_NOMBRE')->nullable()->default('');
            $table->string('PYM_RFC')->nullable()->default('');
            $table->string('PYM_DIR')->nullable()->default('');
            $table->string('NOEXT')->nullable()->default('');
            $table->string('PYM_COLONIA')->nullable()->default('');
            $table->string('PYM_MPIODELCIU')->nullable()->default('');
            $table->string('PYM_ESTADO')->nullable()->default('');
            $table->string('PYM_PAIS')->nullable()->default('');
            $table->string('CP')->nullable()->default('');
            $table->string('LEYENDAFORMAPAGO')->nullable()->default('');
            $table->string('CONDICIONESDEPAGO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxc_historcc');
    }
}
