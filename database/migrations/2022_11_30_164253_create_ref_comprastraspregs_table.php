<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefComprastraspregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_comprastraspregs', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('FK1MCFG_ALMACENES')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENES2')->nullable()->default(0);
            $table->double('FK1MCRM_PROSPECTOS')->nullable()->default(0);
            $table->double('FK1MCFG_VENDEDORES')->nullable()->default(0);
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->string('NUMDOCTONC')->nullable()->default('');
            $table->date('FECHANC')->nullable();
            $table->double('FK1MCFG_USUARIOS2')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->string('NUMDOCTO')->nullable()->default('');
            $table->string('SERDOCTO')->nullable()->default('');
            $table->date('FECHAFACTPROV')->nullable();
            $table->string('NUMFACTPROV')->nullable()->default('');
            $table->string('SECCION')->nullable()->default('');
            $table->double('SUBTOTAL')->nullable()->default(0);
            $table->double('PORCIVA')->nullable()->default(0);
            $table->double('IMPIVA')->nullable()->default(0);
            $table->double('TOTAL')->nullable()->default(0);
            $table->string('OBSERVACIONES')->nullable()->default('');
            $table->string('STATUS')->nullable()->default('');
            $table->string('MOVTOELECTRONICO')->nullable()->default('');
            $table->date('FECHATRASP')->nullable();
            $table->string('TIPOPROVEEDOR')->nullable()->default('');
            $table->string('DOCTOESPECIAL')->nullable()->default('');
            $table->double('IMPIVARETENIDO')->nullable()->default(0);
            $table->string('NOTIFICADOMOVTOELECTRONICO')->nullable()->default('');
            $table->string('FIRMA')->nullable()->default('');
            $table->string('HORAMOVTO', 8)->nullable()->default('');
            $table->date('FECHAVTOPROV')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_comprastraspregs');
    }
}
