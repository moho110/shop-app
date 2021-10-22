<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcOrderOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order_option', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('order_product_id');
            $table->integer('product_option_id');
            $table->integer('product_option_value_id');
            $table->string('name',255);
            $table->text('value');
            $table->string('type',32);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_order_option');
    }
}
