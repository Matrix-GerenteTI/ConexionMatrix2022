<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPedidospresupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_pedidospresup', function (Blueprint $table) {
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
            $table->double('FK11CFG_DOCTOS')->nullable()->default(0);
            $table->date('FECHAVTO')->nullable();
            $table->double('FK1MCFG_USUARIOSLOCK')->nullable()->default(0);
            $table->double('VALESALPZAS')->nullable()->default(0);
            $table->date('FECHAIMPVALESALPZAS')->nullable();
            $table->string('DIRENTREGA')->nullable()->default('');
            $table->string('DETEXTRA')->nullable()->default('');
            $table->double('PORCRETIVA')->nullable()->default(0);
            $table->double('RETIVA')->nullable()->default(0);
            $table->double('PORCRETISR')->nullable()->default(0);
            $table->double('RETISR')->nullable()->default(0);
            $table->string('HORAMOVTO')->nullable()->default('');
            $table->string('CONTIENEPAQUETE')->nullable()->default('');
            $table->double('FK1MCFG_ARTICULOSTPVS')->nullable()->default(-1);
            $table->double('FK1MCFG_ARTICULOS')->nullable()->default(-1);
            $table->double('CANTTOTALPRODUCIDO')->nullable()->default(0);
            $table->string('DESCRIPCIONARTTPV')->nullable()->default('');
            $table->double('FK1MBAR_TPVZONASMESAS')->nullable()->default(-1);
            $table->string('HORAMOVTOCIERREORD')->nullable()->default('');
            $table->double('NOCOMENSALES')->nullable()->default(0);
            $table->double('FK1MCFG_CAJAS')->nullable()->default(0);
            $table->string('CLIENTIDCLP')->nullable()->default('');
            $table->date('FECHAMOVTOCIERREORD')->nullable();
            $table->double('FK1MCFG_ARTICULOSAPLICACIONCTSB')->nullable()->default(0);
            $table->string('ESPEDLIQAPARTADO')->nullable()->default('');
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
        Schema::dropIfExists('ref_pedidospresup');
    }
}
