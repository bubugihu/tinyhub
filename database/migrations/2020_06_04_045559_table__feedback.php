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
        Schema::create('Feedback', function (Blueprint $table) {
            $table->increments('ID');       //Primary key
            $table->string('Fee_Title')->nullable();
            $table->string('Fee_Content')->nullable();
            $table->integer('Fee_Status')->nullable();
            $table->dateTime('Fee_Date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Feedback');
    }
}
