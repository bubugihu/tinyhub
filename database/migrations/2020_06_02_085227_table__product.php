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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');   //primary key
            $table->string('product_title')->nullable();
            $table->float('price',8,2)->nullable();
            $table->longText('short_desciptions')->nullable();
            $table->longText('long_descriptions')->nullable();
            $table->integer('status')->nullable();
            $table->integer('sold_out')->nullable();
            $table->string('feature_image')->nullable();
            $table->date('warranty_period');
            $table->integer('image_id')->unsigned();   //foreign key
            $table->integer('brand_id')->unsigned();    //foreign key
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
        Schema::dropIfExists('product');
    }
}
