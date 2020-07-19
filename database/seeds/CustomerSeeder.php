<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            ['customer_name'=>'Nguyen Duc Anh','dob'=>'1999-05-10','gender'=>'Male','phone'=>'0359874521','address'=>'580 cach mang thang tam - Q3 - TPHCM','users_id'=>'1'],
            ['customer_name'=>'Dang Xuan Quang','dob'=>'1980-05-10','gender'=>'Male','phone'=>'0359784521','address'=>'590 cach mang thang tam - Q3 - TPHCM','users_id'=>'2'],
            ['customer_name'=>'Bui Gia Hung','dob'=>'1980-05-10','gender'=>'Male','phone'=>'0359454521','address'=>'600 cach mang thang tam - Q3 - TPHCM','users_id'=>'3'],
            ['customer_name'=>'Nguyen Chi Thanh','dob'=>'2001-04-10','gender'=>'Male','phone'=>'0352384521','address'=>'590 cach mang thang tam - Q3 - TPHCM','users_id'=>'2'],
            ['customer_name'=>'Vu Manh Kien','dob'=>'2001-02-10','gender'=>'Male','phone'=>'0359434521','address'=>'600 cach mang thang tam - Q3 - TPHCM','users_id'=>'3']
        ]);
    }
}