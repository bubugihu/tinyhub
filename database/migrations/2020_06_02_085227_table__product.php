<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon as SupportCarbon;
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
            $table->string('product_title');
            $table->double('price');
            $table->longText('short_descriptions')->nullable()->default('Not Description');
            $table->longText('long_descriptions')->default('Not Description');
            $table->integer('status')->default(0);           //còn hàng hay ko ? 0 hết, 1 còn
            $table->integer('sold_out')->default(0);        //số lượng đã bán
            $table->string('feature_image');
            $table->integer('warranty_period')->default(24);
            $table->integer('category_id')->unsigned();        //foreign key
            $table->integer('brand_id')->unsigned();       //foreign key
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
