<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image',255);
            $table->integer('parent_id');
            $table->integer('top');
            $table->integer('column');
            $table->integer('sort_order');
            $table->integer('status');
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
        Schema::dropIfExists('oc_category');
    }
}
