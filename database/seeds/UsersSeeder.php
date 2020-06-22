<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('users')->insert([
            ['name'=>'Na','email'=>'na@gmail.com','password'=>'na123'],
            ['name'=>'QuangMap','email'=>'quang@gmail.com','password'=>'quang123'],
            ['name'=>'Bu','email'=>'bu@gmail.com','password'=>'bu123'],
            ['name'=>'Thanh','email'=>'thanh@gmail.com','password'=>'thanh123'],
            ['name'=>'Kien','email'=>'kien@gmail.com','password'=>'kien123']
        ]);
    }
}