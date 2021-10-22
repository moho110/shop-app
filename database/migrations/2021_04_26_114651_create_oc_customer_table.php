<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_customer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_group_id');
            $table->integer('store_id');
            $table->integer('language_id');
            $table->string('firstname',32);
            $table->string('lastname',32);
            $table->string('email',96);
            $table->string('telephone',32);
            $table->string('fax',32);
            $table->string('password',40);
            $table->string('salt',9);
            $table->text('cart');
            $table->text('wishlist');
            $table->integer('newsletter');
            $table->integer('address_id');
            $table->text('custom_field');
            $table->string('ip',40);
            $table->integer('status');
            $table->integer('safe');
            $table->text('token');
            $table->string('code',40);
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
        Schema::dropIfExists('oc_customer');
    }
}
