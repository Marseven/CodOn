<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubthemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subthemes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle',50);
            $table->text('description');
            $table->integer('theme_id')->unsigned();
            $table->integer('administrator_id')->unsigned();
            $table->timestamps();

            $table->foreign('theme_id')->references('id')->on('themes')->onUpdate('cascade');
            $table->foreign('administrator_id')->references('id')->on('administrators')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subthemes');
    }
}
