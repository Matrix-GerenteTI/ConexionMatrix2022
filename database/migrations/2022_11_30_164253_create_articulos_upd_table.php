<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosUpdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos_upd', function (Blueprint $table) {
            $table->double('ID')->nullable();
            $table->string('CODIGOARTICULO')->nullable()->default('');
            $table->double('COSTO')->nullable()->default(0);
            $table->double('PVP1')->nullable()->default(0);
            $table->double('PVP2')->nullable()->default(0);
            $table->double('PVP3')->nullable()->default(0);
            $table->double('PVP4')->nullable()->default(0);
            $table->double('PVP5')->nullable()->default(0);
            $table->double('PVP6')->nullable()->default(0);
            $table->double('PVP10')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos_upd');
    }
}
