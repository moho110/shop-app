<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCustomerSearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_customer_search', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id');
            $table->integer('language_id');
            $table->integer('customer_id');
            $table->string('keyword',255);
            $table->integer('category_id');
            $table->integer('sub_category');
            $table->integer('description');
            $table->integer('products');
            $table->string('ip',40);
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
        Schema::dropIfExists('oc_customer_search');
    }
}
