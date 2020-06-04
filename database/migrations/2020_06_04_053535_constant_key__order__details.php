<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstantKeyOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Order_Details', function (Blueprint $table) {
            $table->foreign('Order_ID')->references('ID')->on('Order');
            $table->foreign('Product_SKU')->references('SKU')->on('Product');
            $table->foreign('Payment_ID')->references('ID')->on('Payment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Order_Details', function (Blueprint $table) {
            $table->dropForeign('Order_ID');
            $table->dropForeign('Product_SKU');
            $table->dropForeign('Payment_ID');
        });
    }
}
