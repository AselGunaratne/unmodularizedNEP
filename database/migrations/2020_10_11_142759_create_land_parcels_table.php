<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_parcels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('governing_organizations');
            $table->json('logs');
            $table->json('polygon');
            $table->integer('created_by_user_id');
            $table->tinyInteger('protected_area');
            $table->timestampsTz(); //time stamp with timezone in UTC
            $table->tinyInteger('status');
            $table->softDeletesTz('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('land_parcels');
    }
}
