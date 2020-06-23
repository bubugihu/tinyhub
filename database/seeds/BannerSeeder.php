<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->insert([
            ['ban_title'=>'Dang Xuan Quang awesome product','ban_content'=>'Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerumnecessitatibus praesentium voluptatum deleniti atque corrupti.','ban_image'=>'headphone-slider2.png'],
            ['ban_title'=>'Nguyen Duc Anh awesome product','ban_content'=>'Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerumnecessitatibus praesentium voluptatum deleniti atque corrupti.','ban_image'=>'headphone-slider1.png'],
            ['ban_title'=>'Bui Gia Hung awesome product','ban_content'=>'Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerumnecessitatibus praesentium voluptatum deleniti atque corrupti.','ban_image'=>'headphone-slider2.png'],
        ]);
    }
}