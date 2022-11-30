<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_articulos', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('CODIGOARTICULO')->nullable()->default('');
            $table->string('CODIGOBARRAPROVEEDOR')->nullable()->default('');
            $table->string('DESCRIPCION')->nullable()->default('');
            $table->string('MARCA')->nullable()->default('');
            $table->string('FAMILIA')->nullable()->default('');
            $table->string('SUBFAMILIA')->nullable()->default('');
            $table->string('REEMPLAZO')->nullable()->default('');
            $table->string('PVP1')->nullable()->default('0');
            $table->string('PVP2')->nullable()->default('0');
            $table->string('PVP3')->nullable()->default('0');
            $table->string('PVP4')->nullable()->default('0');
            $table->string('PVP5')->nullable()->default('0');
            $table->date('FECALTA')->nullable();
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->string('UNIDADDEEMPAQUE')->nullable()->default('');
            $table->string('ITEMSERVICIO')->nullable()->default('');
            $table->double('PCP')->nullable()->default(0);
            $table->string('PREFIJO')->nullable()->default('');
            $table->string('BASICO')->nullable()->default('');
            $table->string('SUFIJO')->nullable()->default('');
            $table->string('OBSERVACIONES')->nullable()->default('');
            $table->string('ITEMPFACTESPECIAL')->nullable()->default('');
            $table->string('EXENTOIVACOMPRA')->nullable()->default('');
            $table->string('PVP6')->nullable()->default('0');
            $table->string('PVP7')->nullable()->default('0');
            $table->string('PVP8')->nullable()->default('0');
            $table->string('PVP9')->nullable()->default('0');
            $table->string('PVP10')->nullable()->default('0');
            $table->string('EXENTOIVAVENTA')->nullable()->default('');
            $table->string('FOLIOAUTOMATICO')->nullable()->default('');
            $table->string('ACTIVO')->nullable()->default('');
            $table->string('PFACTESPECIALAPLICAEN')->nullable()->default('');
            $table->string('PMOBILETORDER')->nullable()->default('');
            $table->string('PVP1CR')->nullable()->default('');
            $table->string('PVP2CR')->nullable()->default('');
            $table->string('PVP3CR')->nullable()->default('');
            $table->string('PVP4CR')->nullable()->default('');
            $table->string('PVP5CR')->nullable()->default('');
            $table->string('PVP6CR')->nullable()->default('');
            $table->string('PVP7CR')->nullable()->default('');
            $table->string('PVP8CR')->nullable()->default('');
            $table->string('PVP9CR')->nullable()->default('');
            $table->string('PVP10CR')->nullable()->default('');
            $table->string('ITEMCORTESIA')->nullable()->default('');
            $table->string('PZASVENDIDAS')->nullable()->default('');
            $table->string('MESESVENTA')->nullable()->default('');
            $table->double('IVAAPLICVTA')->nullable()->default(0);
            $table->string('ITEMDTO')->nullable()->default('');
            $table->string('FACTORK')->nullable()->default('');
            $table->string('LOTEYCADUCIDAD')->nullable()->default('');
            $table->string('EXTREMOS')->nullable()->default('');
            $table->string('ITEMCORTESIA2')->nullable()->default('');
            $table->string('FACTORE')->nullable()->default('');
            $table->string('SOLUSUARIOPVALECAJA')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_articulos');
    }
}
