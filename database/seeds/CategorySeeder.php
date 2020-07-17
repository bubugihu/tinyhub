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
            [   'category_name'         =>  'In Ear',
                'category_image'        =>  'inEar.jpg',     
                'description'           =>  'In-ear headphones, also known as in-ear monitors (IEMs) or canalphones, are small headphones with similar portability to earbuds that are inserted in the ear canal itself.',                  
            ],
            [   'category_name'         =>  'On Ear',
                'category_image'        =>  'onEar.jpg',
                'description'           =>  'On-ear headphones rest on your ears. They are smaller and lighter than over-ear headphones, making it easy to carry around. Ambient noise is still audible to a limited extent, making on-ear headphones safer',
            ],
            [   'category_name'         =>  'True Wireless',
                'category_image'        =>  'true.jpg',
                'description'           =>  'Wireless headphones can be used for a variety of activities, including gaming systems, smart phones, computers, TVs, and other newer electronic devices.',
            ]
        ]);
    }
}
