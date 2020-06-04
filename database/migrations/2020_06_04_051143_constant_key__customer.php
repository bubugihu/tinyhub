<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstantKeyCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Customer', function (Blueprint $table) {
            $table->foreign('Users_ID')->references('ID')->on('Users');
            $table->foreign('News_ID')->references('ID')->on('News');
            $table->foreign('Feedback_ID')->references('ID')->on('Feedback');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Customer', function (Blueprint $table) {
            $table->dropForeign('Users_ID');
            $table->dropForeign('News_ID');
            $table->dropForeign('Feedback_ID');
        });
    }
}
