<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefDetpedidospresuptmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_detpedidospresuptmp', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FKPADREF_PEDIDOSPRESUP')->nullable()->default(0);
            $table->double('FK1MREF_ARTXALMACEN')->nullable()->default(0);
            $table->double('CANTIDAD')->nullable()->default(0);
            $table->double('PRECIO')->nullable()->default(0);
            $table->double('PORCDTO')->nullable()->default(0);
            $table->double('IMPDTO')->nullable()->default(0);
            $table->double('IMPORTELINEA')->nullable()->default(0);
            $table->double('COSTO')->nullable()->default(0);
            $table->double('COSTOLINEA')->nullable()->default(0);
            $table->double('PORCIVA')->nullable()->default(0);
            $table->double('IMPIVA')->nullable()->default(0);
            $table->double('CANTPTEENTREGAR')->nullable()->default(0);
            $table->date('FECHACARGAPZA')->nullable();
            $table->string('CODIGO')->nullable()->default('');
            $table->string('DESCRIPCION')->nullable()->default('');
            $table->string('UNIDADMEDIDA')->nullable()->default('');
            $table->double('FK1MCFG_ARTICULOSTPVS')->nullable()->default(0);
            $table->double('FK1MCFG_ARTICULOS')->nullable()->default(0);
            $table->string('NOLOTE')->nullable()->default('');
            $table->date('CADUCA')->nullable();
            $table->double('FK1MREF_ARTXALMACENCADUCIDAD')->nullable()->default(0);
            $table->double('PORCRETIVA')->nullable()->default(0);
            $table->double('RETIVA')->nullable()->default(0);
            $table->double('PORCRETISR')->nullable()->default(0);
            $table->double('RETISR')->nullable()->default(0);
            $table->string('CODIGOSAT')->nullable()->default('');
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
        Schema::dropIfExists('ref_detpedidospresuptmp');
    }
}
