<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            // In Ear - JBL
            ['product_title'=>'JBL LIVE 300TWS',
            'price'=>2000,
            'feature_image'=>'in-ear-jbl-1-1.jpg',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL Reflect Flow',
            'price'=>2300,
            'feature_image'=>'in-ear-jbl-2-1.jpg',
            'category_id'=>1,
            'brand_id'=>2],

            // In Ear - Sony
            ['product_title'=>'Sony XBA-N1AP',
            'price'=>3200,
            'feature_image'=>'in-ear-sony-1-1.jpg',
            'category_id'=>1,
            'brand_id'=>1],
            
            ['product_title'=>'Sony WI-XB400',
            'price'=>1000,
            'feature_image'=>'in-ear-sony-2-1.jpg',
            'category_id'=>1,
            'brand_id'=>1],

            // In Ear - Westone
            ['product_title'=>'Westone W40',
            'price'=>3200,
            'feature_image'=>'in-ear-westone-1-1.jpeg',
            'category_id'=>1,
            'brand_id'=>3],
            
            ['product_title'=>'Westone W60',
            'price'=>1000,
            'feature_image'=>'in-ear-westone-2-1.jpg',
            'category_id'=>1,
            'brand_id'=>3],
        ]);     
    }
}