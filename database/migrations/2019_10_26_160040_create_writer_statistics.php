<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWriterStatistics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writer_statistics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_videoinfo');
            $table->bigInteger('id_user');
            $table->bigInteger('status');
            $table->dateTime('data_status');
            $table->text('comment');
            $table->smallInteger('payment')->default('0');
            $table->dateTime('data_pay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writer_statistics');
    }
}
