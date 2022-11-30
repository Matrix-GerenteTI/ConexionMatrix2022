<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDoctosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_doctos', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(0);
            $table->double('FK1MCRM_PROSPECTOS')->nullable()->default(0);
            $table->double('FK1MCFG_VENDEDORES')->nullable()->default(0);
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->string('NUMDOCTO')->nullable()->default('');
            $table->string('SERDOCTO')->nullable()->default('');
            $table->string('SECCION')->nullable()->default('');
            $table->double('SUBTOTAL')->nullable()->default(0);
            $table->double('PORCIVA')->nullable()->default(0);
            $table->double('IMPIVA')->nullable()->default(0);
            $table->double('TOTAL')->nullable()->default(0);
            $table->string('DOCTOINTERNO')->nullable()->default('');
            $table->string('DOCTOESPECIAL')->nullable()->default('');
            $table->string('OBSERVACIONES')->nullable()->default('');
            $table->string('TIPOCLIENTE')->nullable()->default('');
            $table->string('STATUS')->nullable()->default('');
            $table->date('FECHAVTO')->nullable();
            $table->string('NUMDOCTONC')->nullable()->default('');
            $table->date('FECHANC')->nullable();
            $table->double('FK1MCFG_USUARIOS2')->nullable()->default(0);
            $table->double('FK11PEDIDOID')->nullable()->default(0);
            $table->string('TABLAPROCEDENCIA')->nullable();
            $table->date('FECHATRASP')->nullable();
            $table->string('TIPODOCTOESPECIAL')->nullable()->default('');
            $table->string('FIRMA', 2048)->nullable();
            $table->string('SELLO', 2048)->nullable();
            $table->text('WSSELLOSAT')->nullable()->default('');
            $table->string('WSNOCERTIFICADOSAT')->nullable()->default('');
            $table->text('WSSELLOCFD')->nullable()->default('');
            $table->string('WSFECHATIMBRADO')->nullable()->default('');
            $table->string('WSUUID')->nullable()->default('');
            $table->string('WSNAMEXMLTIMBRADO')->nullable()->default('');
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
            $table->double('PORCRETIVA')->nullable()->default(0);
            $table->double('RETIVA')->nullable()->default(0);
            $table->double('PORCRETISR')->nullable()->default(0);
            $table->double('RETISR')->nullable()->default(0);
            $table->string('HORAMOVTO')->nullable()->default('');
            $table->string('CONDICIONESDEPAGO')->nullable()->default('');
            $table->string('CONTIENEPAQUETE')->nullable()->default('');
            $table->text('WSBODYXMLTIMBRADO')->nullable();
            $table->double('PORCIMPTOTRASL1')->nullable()->default(0);
            $table->double('IMPTOTRASL1')->nullable()->default(0);
            $table->double('PORCIMPTOTRASL2')->nullable()->default(0);
            $table->double('IMPTOTRASL2')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_doctos');
    }
}
