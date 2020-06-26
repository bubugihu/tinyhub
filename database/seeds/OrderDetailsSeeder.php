<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            ['quantity'=>12,'order_id'=>1,'product_id'=>1],
            ['quantity'=>22,'order_id'=>2,'product_id'=>4],
            ['quantity'=>1,'order_id'=>3,'product_id'=>6],
            ['quantity'=>12,'order_id'=>4,'product_id'=>2],
        ]);
    }
}