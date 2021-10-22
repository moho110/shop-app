<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcGoogleshoppingTargetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_googleshopping_target', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id');
            $table->string('campaign_name',255);
            $table->string('country',5);
            $table->double('budget');
            $table->text('feeds');
            $table->integer('status');
            $table->date('date_added');
            $table->integer('roas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_googleshopping_target');
    }
}
