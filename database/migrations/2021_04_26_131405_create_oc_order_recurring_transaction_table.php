<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcOrderRecurringTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order_recurring_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_recurring_id');
            $table->string('reference',255);
            $table->string('type',255);
            $table->double('amount');
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
        Schema::dropIfExists('oc_order_recurring_transaction');
    }
}
