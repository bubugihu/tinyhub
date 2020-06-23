<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['cmt_title'=>'Test Comments 1','cmt_content'=>'Na Test','product_id'=>1,'customer_id'=>1],
            ['cmt_title'=>'Test Comments 2','cmt_content'=>'Bu Test','product_id'=>3,'customer_id'=>3],
            ['cmt_title'=>'Test Comments 3','cmt_content'=>'Thanh Test','product_id'=>2,'customer_id'=>4],
            ['cmt_title'=>'Test Comments 4','cmt_content'=>'Quang Map Test','product_id'=>5,'customer_id'=>2],
        ]);
    }
}
