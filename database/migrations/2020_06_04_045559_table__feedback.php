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
            $table->string('feed_title',255)->nullable();
            $table->string('feed_content',255)->nullable();
            $table->string('feed_phone',12)->nullable();
            $table->integer('feed_status')->nullable();
            $table->string('feed_email')->nullable();
            $table->dateTime('feed_date')->nullable();
            $table->integer('feed_rep')->default('0');
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
