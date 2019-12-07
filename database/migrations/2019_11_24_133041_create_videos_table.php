<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->smallInteger('site_id');
            $table->smallInteger('status');
            $table->smallInteger('busy')->default(0);
            $table->string('site_name', 100);
            $table->string('videofile', 100);
            $table->string('video_length', 50);
            $table->string('bitrate', 100);
            $table->integer('videofileint');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
