<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcModificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_modification', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('extension_install_id');
            $table->string('name',64);
            $table->string('code',64);
            $table->string('author',64);
            $table->string('version',32);
            $table->string('link',255);
            $table->text('xml');
            $table->integer('status');
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
        Schema::dropIfExists('oc_modification');
    }
}
