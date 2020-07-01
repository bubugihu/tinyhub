<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class TableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->string('cmt_title',256);
            $table->text('cmt_content');
            $table->integer('cmt_status')->default(0);           //được duyệt hay ko? 0 không được, 1 được
            $table->integer('product_id')->unsigned();     //Foreign key
            $table->integer('customer_id')->unsigned();
            $table->timestamps();     //Foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
