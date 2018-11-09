<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('article_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();


            $table->foreign('category_id')->references('id')->on('articles')->onUpdate('cascade');
            $table->foreign('member_id')->references('id')->on('members')->onUpdate('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
