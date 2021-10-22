<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('firstname',32);
            $table->string('lastname',32);
            $table->string('company',40);
            $table->string('address_1',128);
            $table->string('address_2',128);
            $table->string('city',128);
            $table->string('postcode',10);
            $table->integer('country_id');
            $table->integer('zone_id');
            $table->text('custom_field');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_address');
    }
}
