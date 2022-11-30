<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxcCondcreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxc_condcredito', function (Blueprint $table) {
            $table->double('FK1MCRM_PROSPECTOS');
            $table->double('LIMITECREDITO')->nullable()->default(0);
            $table->double('CREDITODISPONIBLE')->nullable()->default(0);
            $table->double('DIASDECREDITO')->nullable()->default(0);
            $table->string('MODULO')->nullable()->default('');
            $table->string('SUBMODULO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxc_condcredito');
    }
}
