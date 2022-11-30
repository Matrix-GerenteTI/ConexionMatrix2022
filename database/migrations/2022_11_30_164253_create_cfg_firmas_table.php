<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgFirmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_firmas', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('CREADOPOR')->nullable()->default('');
            $table->string('VALORFIRMA')->nullable()->default('');
            $table->date('FECHA')->nullable();
            $table->time('HORA')->nullable();
            $table->string('APLICAEN')->nullable()->default('');
            $table->double('IDMOVTOAPLICADO')->nullable()->default(0);
            $table->double('IDDETALLEAPLICADO')->nullable()->default(0);
            $table->date('FECHAAPLICADO')->nullable();
            $table->time('HORAAPLICADO')->nullable();
            $table->string('ACTIVO')->nullable()->default('');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENESORIG')->nullable()->default(0);
            $table->double('FK1MCFG_ALMACENESDTNO')->nullable()->default(0);
            $table->string('ORIGEN')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_firmas');
    }
}
