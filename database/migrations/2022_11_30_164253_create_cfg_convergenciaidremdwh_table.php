<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgConvergenciaidremdwhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_convergenciaidremdwh', function (Blueprint $table) {
            $table->string('NOMBRETABLA')->nullable()->default('');
            $table->double('IDREMOTO')->nullable()->default(0);
            $table->double('IDDWH')->nullable()->default(0);
            $table->date('FECHA')->nullable();
            $table->string('HORA')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_convergenciaidremdwh');
    }
}
