<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmpTraspalmseguridadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmp_traspalmseguridad', function (Blueprint $table) {
            $table->double('IDREF_COMPRASCANDIDATA')->nullable()->default(0);
            $table->string('CODIGOARTICULO')->nullable();
            $table->string('DESCRIPCION')->nullable();
            $table->double('CANTIDAD')->nullable()->default(0);
            $table->double('IDREF_ARTXALMACEN')->nullable()->default(0);
            $table->double('IDREF_ARTXALMACENDTNO')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENDTNO')->nullable()->default(0);
            $table->string('TIPOINCIDENCIA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmp_traspalmseguridad');
    }
}
