<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCustomFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_custom_field', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',32);
            $table->text('value');
            $table->string('validation',255);
            $table->string('location',10);
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
        Schema::dropIfExists('oc_custom_field');
    }
}
