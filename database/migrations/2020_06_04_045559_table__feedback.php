<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class TableFeedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->string('feed_name');       //Primary key
            $table->string('feed_title');
            $table->longText('feed_content');
            $table->string('feed_phone')->nullable();
            $table->integer('feed_status')->default(0);          //được duyệt hay ko? 0-không được duyệt, 1-ngược lại
            $table->string('feed_email');
            $table->integer('feed_rep')->default(0);           //được admin trả lời hay ko? 0-không được, 1-ngược lại
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
        Schema::dropIfExists('feedback');
    }
}
