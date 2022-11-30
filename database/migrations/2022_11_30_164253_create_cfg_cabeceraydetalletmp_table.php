<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgCabeceraydetalletmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_cabeceraydetalletmp', function (Blueprint $table) {
            $table->double('ID');
            $table->string('DOCTO')->nullable()->default('');
            $table->date('POLFECHA')->nullable();
            $table->double('FK1MCFG_USUARIOS')->nullable()->default(0);
            $table->string('FIELD1')->nullable()->default('');
            $table->string('FIELD2')->nullable()->default('');
            $table->string('FIELD3')->nullable()->default('');
            $table->string('FIELD4')->nullable()->default('');
            $table->string('FIELD5')->nullable()->default('');
            $table->string('FIELD6')->nullable()->default('');
            $table->string('FIELD7')->nullable()->default('');
            $table->string('FIELD8')->nullable()->default('');
            $table->string('FIELD9')->nullable()->default('');
            $table->string('FIELD10')->nullable()->default('');
            $table->string('FIELD11')->nullable()->default('');
            $table->string('FIELD12')->nullable()->default('');
            $table->string('FIELD13')->nullable()->default('');
            $table->string('FIELD14')->nullable()->default('');
            $table->string('FIELD15')->nullable()->default('');
            $table->string('FIELD16')->nullable()->default('');
            $table->string('FIELD17')->nullable()->default('');
            $table->string('FIELD18')->nullable()->default('');
            $table->string('FIELD19')->nullable()->default('');
            $table->string('FIELD20')->nullable()->default('');
            $table->string('FIELD21')->nullable()->default('');
            $table->string('FIELD22')->nullable()->default('');
            $table->string('FIELD23')->nullable()->default('');
            $table->string('FIELD24')->nullable()->default('');
            $table->string('FIELD25')->nullable()->default('');
            $table->string('FIELD26')->nullable()->default('');
            $table->string('FIELD27')->nullable()->default('');
            $table->string('FIELD28')->nullable()->default('');
            $table->string('FIELD29')->nullable()->default('');
            $table->string('FIELD30')->nullable()->default('');
            $table->string('FIELD31')->nullable()->default('');
            $table->string('FIELD32')->nullable()->default('');
            $table->string('FIELD33')->nullable()->default('');
            $table->string('FIELD34')->nullable()->default('');
            $table->string('FIELD35')->nullable()->default('');
            $table->string('FIELD36')->nullable()->default('');
            $table->string('FIELD37')->nullable()->default('');
            $table->string('FIELD38')->nullable()->default('');
            $table->string('FIELD39')->nullable()->default('');
            $table->string('FIELD40')->nullable()->default('');
            $table->string('FIELD41')->nullable()->default('');
            $table->string('FIELD42')->nullable()->default('');
            $table->string('FIELD43')->nullable()->default('');
            $table->string('FIELD44')->nullable()->default('');
            $table->string('ACTIVO')->nullable()->default('');
            $table->string('FIELD45')->nullable()->default('');
            $table->string('FIELD46')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_cabeceraydetalletmp');
    }
}
