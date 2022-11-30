<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmProspectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_prospectos', function (Blueprint $table) {
            $table->double('ID_PROSPECTO')->primary();
            $table->double('ID_USUARIO')->nullable()->default(0);
            $table->double('PYM_CIDCLIEN01')->nullable()->default(0);
            $table->string('PYM_CCODIGOC01', 30)->nullable()->default('');
            $table->string('PYM_NOMBRE', 190)->nullable()->default('');
            $table->string('PYM_TIPPER')->nullable()->default('');
            $table->string('PYM_RFC', 20)->nullable()->default('');
            $table->string('PYM_PROFESION')->nullable()->default('');
            $table->string('PYM_TELTRA')->nullable()->default('');
            $table->string('PYM_TELPAR')->nullable()->default('');
            $table->string('PYM_TELCEL')->nullable()->default('');
            $table->string('PYM_BEEPER', 30)->nullable()->default('');
            $table->string('PYM_EMAIL', 1000)->nullable()->default('');
            $table->date('PYM_FECNACI')->nullable();
            $table->string('PYM_DIRPAR')->nullable()->default('');
            $table->string('PYM_COMPANY')->nullable()->default('');
            $table->string('PYM_PUESTO')->nullable()->default('');
            $table->string('PYM_DIRTRA')->nullable()->default('');
            $table->date('PYM_ANIVCOMP')->nullable();
            $table->string('PYM_AUTOSACT')->nullable()->default('');
            $table->string('PYM_TIPPROS', 20)->nullable()->default('');
            $table->date('PYM_FECALTA')->nullable();
            $table->string('PYM_GRUPOREGION')->nullable()->default('');
            $table->string('PYM_MPIODELCIUCOM')->nullable()->default('');
            $table->string('PYM_ESTADOCOM')->nullable()->default('');
            $table->string('PYM_PAISCOM')->nullable()->default('');
            $table->string('PYM_MPIODELCIUFIS')->nullable()->default('');
            $table->string('PYM_ESTADOFIS')->nullable()->default('');
            $table->string('PYM_PAISFIS')->nullable()->default('');
            $table->string('PYM_RUTAREPARTO')->nullable()->default('');
            $table->string('PYM_CTACOMOCTE')->nullable()->default('');
            $table->string('PYM_CTACOMOPROV')->nullable()->default('');
            $table->string('PYM_COLONIACOM')->nullable()->default('');
            $table->string('PYM_COLONIAFIS')->nullable()->default('');
            $table->string('PMOBILETORDER')->nullable()->default('');
            $table->string('PMTORDER_USER')->nullable()->default('');
            $table->double('PMTORDER_CADANSEMANAS')->nullable()->default(0);
            $table->string('PMTORDER_LUNES')->nullable()->default('');
            $table->string('PMTORDER_MARTES')->nullable()->default('');
            $table->string('PMTORDER_MIERCOLES')->nullable()->default('');
            $table->string('PMTORDER_JUEVES')->nullable()->default('');
            $table->string('PMTORDER_VIERNES')->nullable()->default('');
            $table->string('PMTORDER_SABADO')->nullable()->default('');
            $table->string('PMTORDER_DOMINGO')->nullable()->default('');
            $table->double('PMTORDER_IDORDENVISITA')->nullable()->default(0);
            $table->string('NOEXTCOM')->nullable()->default('');
            $table->string('NOEXTFIS')->nullable()->default('');
            $table->string('EMAILCFDIS', 1000)->nullable()->default('');
            $table->string('PWDCLIENTE')->nullable()->default('');
            $table->string('CPCOM')->nullable()->default('');
            $table->string('CPFIS')->nullable()->default('');
            $table->string('NCTAPAGO')->nullable()->default('');
            $table->string('METODOPAGO')->nullable()->default('');
            $table->string('ADJUNTARXML')->nullable()->default('');
            $table->string('RFCREPETIDO')->nullable()->default('');
            $table->string('PROVEMITECFDI')->nullable()->default('');
            $table->string('CLP')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crm_prospectos');
    }
}
