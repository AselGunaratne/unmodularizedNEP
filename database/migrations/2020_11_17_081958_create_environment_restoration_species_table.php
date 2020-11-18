<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentRestorationSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environment_restoration_species', function (Blueprint $table) {
            $table->environment_restoration_id();
            $table->species_information_id();
            $table->integer('count');
            $table->string('remarks');
            $table->string('amendments');
            $table->integer('amended_by');
            $table->timestampsTz('amended_on');

            $table->unique()
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('environment_restoration_species');
    }
}
