<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfgDatosfiscalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfg_datosfiscales', function (Blueprint $table) {
            $table->string('C1')->nullable()->default('');
            $table->string('C2')->nullable()->default('');
            $table->string('C3')->nullable()->default('');
            $table->string('C4')->nullable()->default('');
            $table->string('C5')->nullable()->default('');
            $table->string('C6')->nullable()->default('');
            $table->string('C7')->nullable()->default('');
            $table->string('C8')->nullable()->default('');
            $table->string('C9')->nullable()->default('');
            $table->string('C10')->nullable()->default('');
            $table->string('C11')->nullable()->default('');
            $table->string('C12')->nullable()->default('');
            $table->string('C13')->nullable()->default('');
            $table->string('C14')->nullable()->default('');
            $table->string('C15')->nullable()->default('');
            $table->string('C16')->nullable()->default('');
            $table->string('C17')->nullable()->default('');
            $table->string('C18')->nullable()->default('');
            $table->string('C19')->nullable()->default('');
            $table->string('C20')->nullable()->default('');
            $table->string('C21')->nullable()->default('');
            $table->string('C22')->nullable()->default('');
            $table->string('C23')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfg_datosfiscales');
    }
}
