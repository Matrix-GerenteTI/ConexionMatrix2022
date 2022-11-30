<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgArticulostpvsupdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_articulostpvsupdate', function (Blueprint $table) {
            $table->double('ID');
            $table->string('CODIGOARTTPV')->nullable()->default('');
            $table->string('DESCRIPCION')->nullable()->default('');
            $table->string('ACTIVO')->nullable()->default('');
            $table->double('PVPPAQIVA')->nullable()->default(0);
            $table->string('PMOBILETORDER')->nullable()->default('');
            $table->string('CODIGOPTOVTAREMOTO')->nullable()->default('');
            $table->double('FK1MCFG_ARTICULOS')->nullable()->default(0);
            $table->double('CANTTOTALFINALPRODUCCION')->nullable()->default(0);
            $table->string('MODULO')->nullable()->default('');
            $table->string('ITEMCORTESIA')->nullable()->default('');
            $table->string('FAMILIA')->nullable()->default('');
            $table->string('SUBFAMILIA')->nullable()->default('');
            $table->string('FRECUENTE')->nullable()->default('');
            $table->string('ITEMCORTESIA2')->nullable()->default('');
            $table->string('IMPRESORACOMANDA')->nullable()->default('');
            $table->string('IMPRIMIRCOMANDA')->nullable()->default('');
            $table->string('OBSERVACIONES')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_articulostpvsupdate');
    }
}
