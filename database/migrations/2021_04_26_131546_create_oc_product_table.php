<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model',64);
            $table->string('sku',64);
            $table->string('upc',12);
            $table->string('ean',14);
            $table->string('jan',13);
            $table->string('isbn',17);
            $table->string('mpn',64);
            $table->string('location',128);
            $table->integer('quantity');
            $table->integer('stock_status_id');
            $table->string('image',255);
            $table->integer('manufacturer_id');
            $table->integer('shipping');
            $table->double('price');
            $table->integer('points');
            $table->integer('tax_class_id');
            $table->date('date_available');
            $table->double('weight',50);
            $table->integer('weight_class_id');
            $table->double('length');
            $table->double('width');
            $table->double('height');
            $table->integer('length_class_id');
            $table->integer('subtract');
            $table->integer('minimum');
            $table->integer('sort_order');
            $table->integer('status');
            $table->integer('viewed');
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
        Schema::dropIfExists('oc_product');
    }
}
