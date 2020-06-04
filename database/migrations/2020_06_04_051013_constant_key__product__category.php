<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstantKeyProductCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Product_Category', function (Blueprint $table) {
            $table->foreign('Product_SKU')->references('SKU')->on('Product');
            $table->foreign('Category_ID')->references('ID')->on('Category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Product_Category', function (Blueprint $table) {
            $table->dropForeign('Product_SKU');
            $table->dropForeign('Category_ID');
        });
    }
}
