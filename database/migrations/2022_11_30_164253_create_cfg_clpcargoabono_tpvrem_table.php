<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgClpcargoabonoTpvremTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_clpcargoabono_tpvrem', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCRM_PROSPECTOS')->nullable()->default(0);
            $table->date('FECHAMOVI')->nullable();
            $table->double('CARGO_ME')->nullable()->default(0);
            $table->double('ABONO_ME')->nullable()->default(0);
            $table->double('FK11REF_PEDIDOSPRESUP')->nullable()->default(0);
            $table->double('FK11CFG_DOCTOS')->nullable()->default(0);
            $table->double('FK11CXC_HISTORCC')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->string('NUMDOCTO')->nullable()->default('');
            $table->string('CLPORIGEN')->nullable()->default('');
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
        Schema::dropIfExists('cfg_clpcargoabono_tpvrem');
    }
}
