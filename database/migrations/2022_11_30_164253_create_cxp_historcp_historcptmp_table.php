<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCxpHistorcpHistorcptmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxp_historcp_historcptmp', function (Blueprint $table) {
            $table->double('FK11CXP_HISTORCP');
            $table->double('FK1MCXP_HISTORCPTMP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cxp_historcp_historcptmp');
    }
}
