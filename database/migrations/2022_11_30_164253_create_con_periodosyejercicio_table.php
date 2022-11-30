<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConPeriodosyejercicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('con_periodosyejercicio', function (Blueprint $table) {
            $table->double('ID')->primary();
            $table->double('ANYOCONTABLE')->nullable();
            $table->double('NOMES')->nullable();
            $table->string('STATUS')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('con_periodosyejercicio');
    }
}
