<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcCategoryDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_category_description', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('language_id');
            $table->string('name',255);
            $table->text('description');
            $table->string('meta_title',255);
            $table->string('meta_description',255);
            $table->string('meta_keyword',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_category_description');
    }
}
