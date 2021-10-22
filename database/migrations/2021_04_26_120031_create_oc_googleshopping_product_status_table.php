<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcGoogleshoppingProductStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_googleshopping_product_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id',50);
            $table->string('product_variation_id',64);
            $table->text('destination_statuses');
            $table->text('data_quality_issues');
            $table->text('item_level_issues');
            $table->integer('google_expiration_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_googleshopping_product_status');
    }
}
