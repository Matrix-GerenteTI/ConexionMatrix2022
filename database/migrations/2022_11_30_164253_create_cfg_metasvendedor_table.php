<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgMetasvendedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_metasvendedor', function (Blueprint $table) {
            $table->string('FAMILIA', 100)->nullable()->default('');
            $table->integer('IDVENDEDOR');
            $table->double('VMENSUAL')->nullable()->default(0);
            $table->double('VSEMANAL')->nullable()->default(0);
            $table->double('VDIARIO')->nullable()->default(0);
            $table->double('IMENSUAL')->nullable()->default(0);
            $table->double('ISEMANAL')->nullable()->default(0);
            $table->double('IDIARIO')->nullable()->default(0);
            $table->string('SUBFAMILIA', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_metasvendedor');
    }
}
