<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgUsuarioscompartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_usuarioscompartidos', function (Blueprint $table) {
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->string('NOMBREUSUARIO')->nullable()->default('');
            $table->string('CONTRASENA')->nullable()->default('');
            $table->string('HORAINITURNO', 8)->nullable()->default('');
            $table->string('HORAFINTURNO', 8)->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_usuarioscompartidos');
    }
}
