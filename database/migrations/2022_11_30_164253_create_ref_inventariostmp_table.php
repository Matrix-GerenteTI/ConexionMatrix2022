<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefInventariostmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_inventariostmp', function (Blueprint $table) {
            $table->double('FKCFG_ARTICULOS');
            $table->double('FKCFG_ALMACENES');
            $table->string('USUARIO', 45);
            $table->string('AUDITOR', 500)->nullable();

            $table->primary(['FKCFG_ARTICULOS', 'FKCFG_ALMACENES', 'USUARIO']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_inventariostmp');
    }
}
