<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->increments('SKU');   //primary key
            $table->string('Product_Title')->nullable();
            $table->float('Price',8,2)->nullable();
            $table->integer('Stock')->nullable();
            $table->longText('Short_Desciptions')->nullable();
            $table->longText('Long_Descriptions')->nullable();
            $table->integer('Status')->nullable();
            $table->integer('Best_Buy')->nullable();
            $table->string('Feature_Image')->nullable();
            $table->integer('Image_ID')->unsigned();   //foreign key
            $table->integer('Brand_ID')->unsigned();   //foreign key
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
        Schema::dropIfExists('Product');
    }
}
