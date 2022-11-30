<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarJuntarmesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bar_juntarmesas', function (Blueprint $table) {
            $table->double('FK1MIDTZMA');
            $table->double('FK1MIDTZMB')->nullable()->default(0);
            $table->string('HORAMOVTO')->nullable()->default('');
            $table->string('ACTIVO')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bar_juntarmesas');
    }
}
