<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback')->insert([
            ['feed_title'=>'Test Product 1','feed_content'=>'Thanh Test Product','feed_phone'=>'0359875621','feed_email'=>'thanh@gmail.com'],
            ['feed_title'=>'Test Product 2','feed_content'=>'Kien Test Product','feed_phone'=>'03598456621','feed_email'=>'thanh@gmail.com'],
            ['feed_title'=>'Test Product 3','feed_content'=>'Quang Coi Test Product','feed_phone'=>'0378875621','feed_email'=>'thanh@gmail.com']

        ]);
    }
}