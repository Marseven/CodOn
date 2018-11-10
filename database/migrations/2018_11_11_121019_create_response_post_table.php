<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content',50);
            $table->integer('member_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->timestamps();


            $table->foreign('member_id')->references('id')->on('members')->onUpdate('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('response_post');
    }
}
