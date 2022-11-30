<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgConsecutivoscompartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_consecutivoscompartidos', function (Blueprint $table) {
            $table->string('NOMBRECAMPO')->nullable()->default('');
            $table->double('FK1MCFG_USUARIOSORIGEN')->nullable()->default(0);
            $table->double('FK1MCFG_USUARIOSCOMPARTE')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_consecutivoscompartidos');
    }
}
