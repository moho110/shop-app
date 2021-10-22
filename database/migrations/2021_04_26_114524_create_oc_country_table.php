<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_country', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',128);
            $table->string('iso_code_2',2);
            $table->string('iso_code_3',3);
            $table->text('address_format');
            $table->integer('postcode_required');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_country');
    }
}
