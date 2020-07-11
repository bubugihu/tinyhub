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
            ['feed_name' => 'Mr Donald Trump','feed_title'=>'Product','feed_content'=>'This is my phone which buy from TinyHub. All voices sounded natural and rich, including the bass. I love it','feed_phone'=>'0359875621','feed_status' => 1,'feed_email'=>'thanh@gmail.com'],
            ['feed_name' => 'Mr Obama ','feed_title'=>'Payment','feed_content'=>'I like TinyHub because they have many payment. It is so convenient, my card is platium which have a lot rewards.','feed_phone'=>'03598456621','feed_status' => 1,'feed_email'=>'thanh@gmail.com'],
            ['feed_name' => 'Ms Yui Hatano','feed_title'=>'Shipping','feed_content'=>'My order has been confirmed last night. This morning i received. Wow, to fast to furious.','feed_phone'=>'0378875621','feed_status' => 1,'feed_email'=>'thanh@gmail.com'],
            ['feed_name' => 'Mr Hold Calm Down','feed_title'=>'Price','feed_content'=>'I bought Beats Platium 1 hours ago. It is a limit version but price total is 300$. I cant believe it.','feed_phone'=>'0378875621','feed_status' => 1,'feed_email'=>'thanh@gmail.com']

        ]);
    }
}