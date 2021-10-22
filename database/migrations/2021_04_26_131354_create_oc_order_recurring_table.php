<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcOrderRecurringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order_recurring', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id',50);
            $table->string('reference',255);
            $table->integer('product_id');
            $table->string('product_name',255);
            $table->integer('product_quantity');
            $table->integer('recurring_id');
            $table->string('recurring_name',255);
            $table->string('recurring_description',255);
            $table->string('recurring_frequency',25);
            $table->integer('recurring_cycle');
            $table->integer('recurring_duration');
            $table->double('recurring_price');
            $table->integer('trial');
            $table->string('trial_frequency',25);
            $table->integer('trial_cycle');
            $table->integer('trial_duration');
            $table->integer('trial_price');
            $table->integer('status');
            $table->integer('date_added');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_order_recurring');
    }
}
