<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comments', function (Blueprint $table) {
            $table->string('cmt_Title',256);
            $table->text('cmt_Content');
            $table->integer('cmt_Status');
            $table->dateTime('cmt_Date');
            $table->integer('Product_SKU')->unsigned();     //Foreign key
            $table->integer('Customer_ID')->unsigned();     //Foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comments');
    }
}
