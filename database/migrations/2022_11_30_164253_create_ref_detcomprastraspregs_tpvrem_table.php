<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefDetcomprastraspregsTpvremTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_detcomprastraspregs_tpvrem', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FKPADREF_COMPRASTRASPREGS')->nullable()->default(0);
            $table->double('FK1MREF_ARTXALMACEN')->nullable()->default(0);
            $table->double('CANTIDAD')->nullable()->default(0);
            $table->double('COSTO')->nullable()->default(0);
            $table->double('COSTOLINEA')->nullable()->default(0);
            $table->double('PORCIVA')->nullable()->default(0);
            $table->double('IMPIVA')->nullable()->default(0);
            $table->double('CANTPTERECIBIR')->nullable()->default(0);
            $table->string('DESCRIPCION')->nullable()->default('');
            $table->double('IMPIVARETENIDO')->nullable()->default(0);
            $table->double('FK1MREF_ARTXALMACEN2')->nullable()->default(-1);
            $table->string('CODIGO')->nullable()->default('');
            $table->string('NOLOTE')->nullable()->default('');
            $table->date('CADUCA')->nullable();
            $table->double('FK1MREF_ARTXALMACENCADUCIDAD')->nullable()->default(0);
            $table->double('FACTORE')->nullable()->default(0);
            $table->string('DSN')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_detcomprastraspregs_tpvrem');
    }
}
