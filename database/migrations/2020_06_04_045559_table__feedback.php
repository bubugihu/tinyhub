<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->increments('id');       //Primary key
            $table->string('feed_title',255);
            $table->longText('feed_content');
            $table->string('feed_phone',12);
            $table->binary('feed_status')->default(0);          //được duyệt hay ko? 0-không được duyệt, 1-ngược lại
            $table->string('feed_email')->unique();
            $table->dateTime('feed_date')->nullable();
            $table->binary('feed_rep')->default('0');           //được admin trả lời hay ko? 0-không được, 1-ngược lại
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
