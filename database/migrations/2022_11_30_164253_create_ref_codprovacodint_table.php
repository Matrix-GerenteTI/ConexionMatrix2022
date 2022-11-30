<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefCodprovacodintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_codprovacodint', function (Blueprint $table) {
            $table->double('ID');
            $table->double('FK1MCRM_PROSPECTOS')->nullable()->default(0);
            $table->string('ACTIVO')->nullable()->default('');
            $table->date('FECALTA')->nullable();
            $table->string('CODIGOPROV')->nullable()->default('');
            $table->string('DESCRIPPROV')->nullable()->default('');
            $table->string('CODIGOINT')->nullable()->default('');
            $table->string('DESCRIPINT')->nullable()->default('');
            $table->string('ESGASTO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_codprovacodint');
    }
}
