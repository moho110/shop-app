<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcRecurringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_recurring', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price');
            $table->string('frequency');
            $table->integer('duration');
            $table->integer('cycle');
            $table->integer('trial_status');
            $table->double('trial_price');
            $table->string('trial_frequency');
            $table->integer('trial_duration');
            $table->integer('trial_cycle');
            $table->integer('status');
            $table->integer('sort_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_recurring');
    }
}
