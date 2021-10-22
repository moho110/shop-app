<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcBannerImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_banner_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('banner_id');
            $table->integer('language_id');
            $table->string('title',64);
            $table->string('link',255);
            $table->string('image',255);
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
        Schema::dropIfExists('oc_banner_image');
    }
}
