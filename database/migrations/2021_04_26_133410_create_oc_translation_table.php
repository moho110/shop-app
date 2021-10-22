<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id');
            $table->integer('language_id');
            $table->string('route',64);
            $table->string('key',64);
            $table->text('value');
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
        Schema::dropIfExists('oc_translation');
    }
}
