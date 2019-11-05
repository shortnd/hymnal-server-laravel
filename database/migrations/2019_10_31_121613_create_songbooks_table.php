<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songbooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('songbook_title');
            $table->string('orginization');
            $table->string('description');
            $table->string('front_cover')->nullable();
            $table->string('back_cover')->nullable();
            $table->string('some_publish_or_expiration_dates')->nullable();
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
        Schema::dropIfExists('songbooks');
    }
}
