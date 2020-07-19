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
            ['ban_title'=>'Happy Independence Day','ban_content'=>'SALE UP TO 70%','ban_image'=>'headphone-slider2.png'],
            ['ban_title'=>'Mid-Autumn Festival','ban_content'=>'BUY 1 GET 1 FREE','ban_image'=>'headphone-slider1.png'],
            ['ban_title'=>'Golden Week','ban_content'=>'BEST SELLING BEST SALE UP','ban_image'=>'unnamed.png'],
        ]);
    }
}