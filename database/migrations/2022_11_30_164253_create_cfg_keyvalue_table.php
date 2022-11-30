<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgKeyvalueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_keyvalue', function (Blueprint $table) {
            $table->string('KEY_')->nullable()->default('');
            $table->string('VALUE_')->nullable()->default('');
            $table->string('VALUE2_')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_keyvalue');
    }
}
