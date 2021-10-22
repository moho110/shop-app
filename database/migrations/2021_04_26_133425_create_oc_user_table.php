<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_group_id');
            $table->string('username',20);
            $table->string('password',40);
            $table->string('salt',9);
            $table->string('firstname',32);
            $table->string('lastname',32);
            $table->string('email',96);
            $table->string('image',255);
            $table->string('code',40);
            $table->string('ip',40);
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
        Schema::dropIfExists('oc_user');
    }
}
