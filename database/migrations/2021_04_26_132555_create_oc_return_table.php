<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcReturnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_return', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('customer_id');
            $table->string('firstname',32);
            $table->string('lastname',32);
            $table->string('email',96);
            $table->string('telephone',32);
            $table->string('product',255);
            $table->string('model',64);
            $table->integer('quantity');
            $table->integer('opened');
            $table->integer('return_reason_id');
            $table->integer('return_action_id');
            $table->integer('return_status_id');
            $table->text('comment');
            $table->date('date_ordered');
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
        Schema::dropIfExists('oc_return');
    }
}
