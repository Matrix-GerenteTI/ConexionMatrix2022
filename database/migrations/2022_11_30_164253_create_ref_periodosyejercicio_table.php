<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPeriodosyejercicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_periodosyejercicio', function (Blueprint $table) {
            $table->double('ID');
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
        Schema::dropIfExists('ref_periodosyejercicio');
    }
}
