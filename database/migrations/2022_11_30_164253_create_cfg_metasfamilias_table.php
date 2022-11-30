<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgMetasfamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_metasfamilias', function (Blueprint $table) {
            $table->string('FAMILIA', 100)->nullable()->default('');
            $table->double('IDALMACEN');
            $table->double('VMENSUAL')->nullable()->default(0);
            $table->double('VSEMANAL')->nullable()->default(0);
            $table->double('VDIARIO')->nullable()->default(0);
            $table->double('IMENSUAL')->nullable()->default(0);
            $table->double('ISEMANAL')->nullable()->default(0);
            $table->double('IDIARIO')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_metasfamilias');
    }
}
