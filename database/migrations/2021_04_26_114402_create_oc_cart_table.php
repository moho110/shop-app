<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_cart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('api_id');
            $table->integer('customer_id');
            $table->string('session_id',32);
            $table->integer('product_id');
            $table->integer('recurring_id');
            $table->text('option');
            $table->integer('quantity');
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
        Schema::dropIfExists('oc_cart');
    }
}
