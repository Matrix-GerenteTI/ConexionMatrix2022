<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgUsuariosinciacceTpvremTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_usuariosinciacce_tpvrem', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->date('FECHAINCIACCE')->nullable();
            $table->string('HORAINCIACCE')->nullable()->default('');
            $table->string('NOMUSUARIO')->nullable()->default('');
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
        Schema::dropIfExists('cfg_usuariosinciacce_tpvrem');
    }
}
