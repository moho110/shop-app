<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_currency', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',32);
            $table->string('code',5);
            $table->string('symbol_left',12);
            $table->string('symbol_right',12);
            $table->string('decimal_place',5);
            $table->double('value');
            $table->integer('status');
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
        Schema::dropIfExists('oc_currency');
    }
}
