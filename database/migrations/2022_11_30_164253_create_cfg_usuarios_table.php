<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_usuarios', function (Blueprint $table) {
            $table->double('ID_USUARIO')->primary();
            $table->string('USU_PILOTUSER', 25)->nullable()->default('');
            $table->string('USU_NOMBRE', 20)->nullable()->default('');
            $table->string('USU_APELPAT', 20)->nullable()->default('');
            $table->string('USU_APELMAT', 20)->nullable()->default('');
            $table->string('USU_DEPTO', 30)->nullable()->default('');
            $table->string('USU_PUESTO', 30)->nullable()->default('');
            $table->string('USU_STATUS', 20)->nullable()->default('');
            $table->string('USU_NOMBREEMPCTE')->nullable()->default('');
            $table->string('USU_PATHXLS', 80)->nullable()->default('');
            $table->string('USU_PATHINFOREXT', 80)->nullable()->default('');
            $table->string('USU_ACTIVO', 2)->nullable()->default('');
            $table->string('USU_ACCESOPYM', 2)->nullable()->default('');
            $table->string('USU_CXCSECCION')->nullable()->default('');
            $table->string('USU_CXCSECCIONREF')->nullable()->default('');
            $table->string('USU_CXCSECCIONSER')->nullable()->default('');
            $table->string('USU_CXCSECCIONVEN')->nullable()->default('');
            $table->string('USU_CXCSECCIONVEU')->nullable();
            $table->string('USU_CXCSECCIONCXC')->nullable()->default('');
            $table->string('USU_CRGAPZASPEDMOSTPUB')->nullable()->default('');
            $table->string('USU_CRGAMOPEDMOSTPUB')->nullable()->default('');
            $table->string('USU_POLIZAAGRUPAREN')->nullable()->default('');
            $table->string('USU_PWDSMS')->nullable()->default('');
            $table->string('CELULAR')->nullable()->default('');
            $table->string('EMAIL')->nullable()->default('');
            $table->string('PMOBILETORDER')->nullable()->default('');
            $table->string('USU_CRGAPAQPEDMOSTPUB')->nullable()->default('');
            $table->double('IDAGRUPPED')->nullable()->default(0);
            $table->string('PERFILBARMAN')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_usuarios');
    }
}
