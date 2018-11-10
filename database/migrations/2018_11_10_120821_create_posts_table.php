<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content',50);
            $table->integer('theme_id')->unsigned();
            $table->integer('subtheme_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->foreign('subtheme_id')->references('id')->on('subthemes');
            $table->foreign('theme_id')->references('id')->on('themes');
            $table->foreign('member_id')->references('id')->on('members');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
