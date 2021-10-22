<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_language', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32);
            $table->string('code',5);
            $table->string('locale',255);
            $table->string('image',64);
            $table->string('directory',32);
            $table->integer('sort_order');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_language');
    }
}
