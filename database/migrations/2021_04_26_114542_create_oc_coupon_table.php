<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_coupon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',128);
            $table->string('code',20);
            $table->string('type',2);
            $table->double('discount');
            $table->integer('logged');
            $table->integer('shipping');
            $table->double('total');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('uses_total');
            $table->string('uses_customer',11);
            $table->integer('status');
            $table->datetime('date_added');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_coupon');
    }
}
