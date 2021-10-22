<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcProductOptionValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_product_option_value', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_option_id');
            $table->integer('product_id');
            $table->integer('option_id');
            $table->integer('option_value_id');
            $table->integer('quantity');
            $table->integer('subtract');
            $table->double('price');
            $table->string('price_prefix',10);
            $table->integer('points');
            $table->string('points_prefix',10);
            $table->double('weight');
            $table->string('weight_prefix',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_product_option_value');
    }
}
