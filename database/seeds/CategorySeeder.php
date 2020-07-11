<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [   'category_name'     =>  'In Ear',
                'category_image'    =>  'inEar.jpg'                        
            ],
            [   'category_name'     =>  'On Ear',
                'category_image'    =>  'onEar.jpg'
            ],
            [   'category_name'     =>  'True Wireless',
                'category_image'    =>  'true.jpg'],
        ]);
    }
}
