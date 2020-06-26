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
            ['shipping_address'=>'234 Le Hong Phong','consignee_name'=>'Nguyen Duc Anh','phone_consignee'=>'0359875621','status'=>1,'customer_id'=>1],
            ['shipping_address'=>'234 3 thang 2','consignee_name'=>'Dang Xuan Quang','phone_consignee'=>'0359871221','status'=>0,'customer_id'=>2],
            ['shipping_address'=>'234 Phan Van Tri','consignee_name'=>'Bui Gia Hung','phone_consignee'=>'0359875665','status'=>0,'customer_id'=>3],
            ['shipping_address'=>'234 Nguyen Chi Thanh','consignee_name'=>'Nguyen Chi Thanh','phone_consignee'=>'0459875621','status'=>1,'customer_id'=>4],
            
        ]);
    }
}