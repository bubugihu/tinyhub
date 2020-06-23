<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            ['status'=>1,'customer_id'=>1],
            ['status'=>0,'customer_id'=>2],
            ['status'=>0,'customer_id'=>3],
            ['status'=>1,'customer_id'=>4],
            
        ]);
    }
}