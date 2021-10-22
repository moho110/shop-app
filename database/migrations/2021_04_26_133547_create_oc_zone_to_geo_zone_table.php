<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcZoneToGeoZoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_zone_to_geo_zone', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
            $table->integer('zone_id');
            $table->integer('geo_zone_id');
            $table->datetime('date_added');
            $table->datetime('date_modified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_zone_to_geo_zone');
    }
}
