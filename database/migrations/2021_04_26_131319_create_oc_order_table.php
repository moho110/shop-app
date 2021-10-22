<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoice_no');
            $table->string('invoice_prefix',26);
            $table->integer('store_id');
            $table->string('store_name',64);
            $table->string('store_url',255);
            $table->integer('customer_id');
            $table->integer('customer_group_id');
            $table->string('firstname',32);
            $table->string('lastname',32);
            $table->string('email',96);
            $table->string('telephone',32);
            $table->string('fax',32);
            $table->text('custom_field');
            $table->string('payment_firstname',32);
            $table->string('payment_lastname',32);
            $table->string('payment_company',60);
            $table->string('payment_address_1',128);
            $table->string('payment_address_2',128);
            $table->string('payment_city',128);
            $table->string('payment_postcode',10);
            $table->string('payment_country',128);
            $table->integer('payment_country_id');
            $table->string('payment_zone',128);
            $table->integer('payment_zone_id');
            $table->text('payment_address_format');
            $table->text('payment_custom_field');
            $table->string('payment_method',128);
            $table->string('payment_code',128);
            $table->string('shipping_firstname',32);
            $table->string('shipping_lastname',32);
            $table->string('shipping_company',40);
            $table->string('shipping_address_1',128);
            $table->string('shipping_address_2',128);
            $table->string('shipping_city',128);
            $table->string('shipping_postcode',10);
            $table->string('shipping_country',128);
            $table->integer('shipping_country_id');
            $table->string('shipping_zone',128);
            $table->integer('shipping_zone_id');
            $table->text('shipping_address_format');
            $table->text('shipping_custom_field');
            $table->string('shipping_method',128);
            $table->string('shipping_code',128);
            $table->text('comment');
            $table->double('total');
            $table->integer('order_status_id');
            $table->integer('affiliate_id');
            $table->double('commission');
            $table->integer('marketing_id');
            $table->string('tracking',64);
            $table->integer('language_id');
            $table->integer('currency_id');
            $table->string('currency_code',10);
            $table->double('currency_value');
            $table->string('ip',40);
            $table->string('forwarded_ip',40);
            $table->string('user_agent',255);
            $table->string('accept_language',255);
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
        Schema::dropIfExists('oc_order');
    }
}
