<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxcRecibosdetfactengrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxc_recibosdetfactengrupo', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('NUMERO')->nullable()->default('');
            $table->date('FECHAVTO')->nullable();
            $table->date('FECHAEMISION')->nullable();
            $table->string('TIPOCOBRO')->nullable()->default('');
            $table->string('BANCO')->nullable()->default('');
            $table->double('IMPORTE')->nullable()->default(0);
            $table->double('ACUENTA')->nullable()->default(0);
            $table->string('FACTURAPROVEEDOR')->nullable()->default('');
            $table->string('OBSERVACIONES')->nullable()->default('');
            $table->string('NUMFACT')->nullable()->default('');
            $table->string('REC_PAGADO')->nullable()->default('');
            $table->double('IMP_FACTU_HISTORCC')->nullable()->default(0);
            $table->double('IMP_COBRO_HISTORCC')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->string('ORIGEN')->nullable()->default('');
            $table->date('FECHACOBRO')->nullable();
            $table->string('CONCEPTOREAL')->nullable()->default('');
            $table->string('NUMANTICIPO')->nullable()->default('');
            $table->double('IMPORTEIVA1')->nullable()->default(0);
            $table->double('TANTOIVA1')->nullable()->default(0);
            $table->string('TIPOCLIENTE')->nullable()->default('');
            $table->string('TIPOCLIENTE2')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxc_recibosdetfactengrupo');
    }
}
