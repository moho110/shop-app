<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcSeoUrlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_seo_url', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id');
            $table->integer('language_id');
            $table->string('query',255);
            $table->string('keyword',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_seo_url');
    }
}
