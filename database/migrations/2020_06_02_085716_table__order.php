<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class TableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');     //primary key;
            $table->string('shipping_address');
            $table->string('consignee_name');                     //người nhận hàng
            $table->string('phone_consignee', 12);
            $table->longText('note')->nullable()->default('Not Description');
            $table->string('payment')->nullable()->default('COD');
            $table->integer('status')->default(0);        //tiếp nhận hay ko? 0-không tiếp nhận, 1-ngược lại
            $table->integer('customer_id')->unsigned();     //Foreign key
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
        Schema::dropIfExists('order');
    }
}
