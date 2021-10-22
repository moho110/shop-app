<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcOrderShipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order_shipment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id',50);
            $table->datetime('date_added');
            $table->string('shipping_courier_id',255);
            $table->string('tracking_number',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_order_shipment');
    }
}
