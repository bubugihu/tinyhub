<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order_Details', function (Blueprint $table) {
            $table->integer('Quantity')->nullable();
            $table->double('Total',10,3)->nullable();
            $table->longText('Comments');
            $table->integer('Order_ID')->unsigned();        //Foreign key
            $table->integer('Product_SKU')->unsigned();        //Foreign key
            $table->integer('Payment_ID')->unsigned();        //Foreign key
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
        Schema::dropIfExists('Order_Details');
    }
}
