<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstantKeyComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Comments', function (Blueprint $table) {
            $table->foreign('Product_SKU')->references('SKU')->on('Product');
            $table->foreign('Customer_ID')->references('ID')->on('Customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Comments', function (Blueprint $table) {
            $table->dropForeign('Product_SKU');
            $table->dropForeign('Customer_ID');
        });
    }
}
