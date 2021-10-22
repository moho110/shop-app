<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_voucher', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->string('code',10);
            $table->string('from_name',64);
            $table->string('from_email',96);
            $table->string('to_name',64);
            $table->string('to_email',96);
            $table->integer('voucher_theme_id');
            $table->text('message');
            $table->double('amount');
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
        Schema::dropIfExists('oc_voucher');
    }
}
