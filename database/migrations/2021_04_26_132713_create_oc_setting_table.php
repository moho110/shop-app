<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id');
            $table->string('code',128);
            $table->string('key',128);
            $table->text('value');
            $table->integer('serialized');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_setting');
    }
}
