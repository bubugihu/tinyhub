<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
            // In Ear - JBL
            ['product_id'=>'1','product_gallery'=>'in-ear-jbl-1-2.jpg'],
            ['product_id'=>'1','product_gallery'=>'in-ear-jbl-1-3.jpg'],
            ['product_id'=>'1','product_gallery'=>'in-ear-jbl-1-4.jpg'],
            ['product_id'=>'2','product_gallery'=>'in-ear-jbl-2-2.jpg'],
            ['product_id'=>'2','product_gallery'=>'in-ear-jbl-2-3.jpg'],
            ['product_id'=>'2','product_gallery'=>'in-ear-jbl-2-4.jpg'],
            // In Ear - Sony
            ['product_id'=>'3','product_gallery'=>'in-ear-sony-1-2.jpg'],
            ['product_id'=>'3','product_gallery'=>'in-ear-sony-1-3.jpg'],
            ['product_id'=>'3','product_gallery'=>'in-ear-sony-1-4.jpg'],
            ['product_id'=>'4','product_gallery'=>'in-ear-sony-2-2.jpg'],
            ['product_id'=>'4','product_gallery'=>'in-ear-sony-2-3.jpg'],
            ['product_id'=>'4','product_gallery'=>'in-ear-sony-2-4.jpg'],
            // In Ear - Westone
            ['product_id'=>'5','product_gallery'=>'in-ear-westone-3-2.jpg'],
            ['product_id'=>'5','product_gallery'=>''],
            ['product_id'=>'5','product_gallery'=>''],
            ['product_id'=>'6','product_gallery'=>''],
            ['product_id'=>'6','product_gallery'=>''],
            ['product_id'=>'6','product_gallery'=>'']
        ]);      
    }
}