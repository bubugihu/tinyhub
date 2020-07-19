<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Bubu','email'=>'admin@gmail.com','password'=>Hash::make('123123123'), 'role'=> 1],
            ['name'=>'Na','email'=>'na@gmail.com','password'=>'na123', 'role'=> 0],
            ['name'=>'QuangMap','email'=>'quang@gmail.com','password'=>'quang123', 'role'=> 0],
            ['name'=>'Bu','email'=>'bu@gmail.com','password'=>'bu123', 'role'=> 0],
            ['name'=>'Thanh','email'=>'thanh@gmail.com','password'=>'thanh123', 'role'=> 0],
            ['name'=>'Kien','email'=>'kien@gmail.com','password'=>'kien123', 'role'=> 0]
        ]);
        
        DB::table('customer')->insert([
            ['customer_name'=>'Admin','dob'=>'1999-05-10','gender'=>'Male','phone'=>'0359874522','address'=>'580 cach mang thang tam - Q3 - TPHCM','users_id'=>'1'],
        ]);
    }
}
