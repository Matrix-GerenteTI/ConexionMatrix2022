<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->string('ID', 50)->nullable();
            $table->string('CODIGOARTI', 200)->nullable();
            $table->string('CODIGOBARR', 200)->nullable();
            $table->string('DESCRIPCIO', 200)->nullable();
            $table->string('MARCA', 200)->nullable();
            $table->string('FAMILIA', 200)->nullable();
            $table->string('SUBFAMILIA', 200)->nullable();
            $table->string('REEMPLAZO', 200)->nullable();
            $table->string('PVP1', 9)->nullable();
            $table->string('PVP2', 9)->nullable();
            $table->string('PVP3', 9)->nullable();
            $table->string('PVP4', 9)->nullable();
            $table->string('PVP5', 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo');
    }
}
