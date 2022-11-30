<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefArtxalmacenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_artxalmacen', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FK1MCFG_ARTICULOS')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(0);
            $table->double('EXISTOTAL')->nullable()->default(0);
            $table->double('EXISPEDIDOS')->nullable()->default(0);
            $table->double('EXISPROCESO')->nullable()->default(0);
            $table->double('EXISMIN')->nullable()->default(0);
            $table->double('EXISMAX')->nullable()->default(0);
            $table->string('UBICACION1')->nullable()->default('');
            $table->string('UBICACION2')->nullable()->default('');
            $table->string('UBICACION3')->nullable()->default('');
            $table->double('CTOPROMEDIO')->nullable()->default(0);
            $table->double('CTOULTCOMPRA')->nullable()->default(0);
            $table->date('FECULTCOM')->nullable();
            $table->date('FECULTVTA')->nullable();
            $table->double('EXISNEG')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_artxalmacen');
    }
}
