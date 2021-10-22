<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_location', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32);
            $table->text('address');
            $table->string('telephone',32);
            $table->string('fax',32);
            $table->string('geocode',32);
            $table->string('image',255);
            $table->text('open');
            $table->text('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_location');
    }
}
