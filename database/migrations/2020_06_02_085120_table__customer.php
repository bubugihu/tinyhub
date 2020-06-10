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
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');  //primary key
            $table->string('customer_name',256)->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone',12)->nullable();
            $table->string('address')->nullable();
            $table->integer('users_id')->unsigned();     //foreign key
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
        Schema::dropIfExists('customer');
    }
}
