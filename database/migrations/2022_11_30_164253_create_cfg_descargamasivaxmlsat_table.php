<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDescargamasivaxmlsatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_descargamasivaxmlsat', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->string('TIPODESCARGA')->nullable()->default('');
            $table->date('FECHAINICIAL')->nullable();
            $table->date('FECHAFINAL')->nullable();
            $table->string('DTNODESCARGA')->nullable()->default('');
            $table->string('IDDESCARGA')->nullable()->default('');
            $table->string('STATUS')->nullable()->default('');
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
        Schema::dropIfExists('cfg_descargamasivaxmlsat');
    }
}
