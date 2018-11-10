<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle',50);
            $table->text('description');
            $table->integer('resolu');
            $table->integer('theme_id')->unsigned();
            $table->integer('subtheme_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->timestamps();

            $table->foreign('subtheme_id')->references('id')->on('subthemes')->onUpdate('cascade');
            $table->foreign('theme_id')->references('id')->on('themes')->onUpdate('cascade');
            $table->foreign('member_id')->references('id')->on('members')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
