<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer', function (Blueprint $table) {
            $table->increments('ID');  //primary key
            $table->string('Customer_Name',256)->nullable();
            $table->date('DOB')->nullable();
            $table->string('Gender')->nullable();
            $table->integer('Phone')->nullable();
            $table->string('Address')->nullable();
            $table->integer('Users_ID')->unsigned();     //foreign key
            $table->integer('News_ID')->unsigned();     //foreign key
            $table->integer('Feedback_ID')->unsigned();     //foreign key
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
        Schema::dropIfExists('Customer');
    }
}
