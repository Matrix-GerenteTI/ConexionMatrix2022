<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmpDescargaxmlsatvssistemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmp_descargaxmlsatvssistema', function (Blueprint $table) {
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->string('EMISORRFC')->nullable()->default('');
            $table->string('EMISORNOMBRE')->nullable()->default('');
            $table->string('RECEPRFC')->nullable()->default('');
            $table->string('RECEPNOMBRE')->nullable()->default('');
            $table->string('UUID')->nullable()->default('');
            $table->string('FOLIOSERIE')->nullable()->default('');
            $table->string('FECHA')->nullable()->default('');
            $table->string('FORMAPAGO')->nullable()->default('');
            $table->string('METODOPAGO')->nullable()->default('');
            $table->string('TOTAL')->nullable()->default('');
            $table->string('FECHAPAGO')->nullable()->default('');
            $table->string('FORMADEPAGO')->nullable()->default('');
            $table->string('MONTOPAGO')->nullable()->default('');
            $table->string('TIPODECOMPROBANTE')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmp_descargaxmlsatvssistema');
    }
}
