<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponseCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('member_id')->unsigned();
            $table->integer('comment_id')->unsigned();
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members')->onUpdate('cascade');
            $table->foreign('comment_id')->references('id')->on('comments')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('response_comment');
    }
}
