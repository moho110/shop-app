<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCustomerAffiliateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_customer_affiliate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company',40);
            $table->string('website',255);
            $table->string('tracking',64);
            $table->double('commission');
            $table->string('tax',64);
            $table->string('payment',6);
            $table->string('cheque',100);
            $table->string('paypal',64);
            $table->string('bank_name',64);
            $table->string('bank_branch_number',64);
            $table->string('bank_swift_code',64);
            $table->string('bank_account_name',64);
            $table->string('bank_account_number',64);
            $table->text('custom_field');
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
        Schema::dropIfExists('oc_customer_affiliate');
    }
}
