<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcGoogleshoppingProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_googleshopping_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('store_id');
            $table->integer('has_issues');
            $table->integer('destination_status');
            $table->integer('impressions');
            $table->integer('clicks');
            $table->integer('conversions');
            $table->double('cost');
            $table->double('conversion_value');
            $table->string('google_product_category',10);
            $table->integer('condition');
            $table->integer('adult');
            $table->integer('multipack');
            $table->integer('is_bundle');
            $table->integer('age_group');
            $table->integer('color');
            $table->integer('gender');
            $table->integer('size_type');
            $table->integer('size_system');
            $table->integer('size');
            $table->integer('is_modified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_googleshopping_product');
    }
}
