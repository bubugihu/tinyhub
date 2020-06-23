<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            ['quantity'=>12,
            'payment'=>'Payment on delivery',
            'shipping_address'=>'234 Le Hong Phong',
            'consignee_name'=>'Nguyen Duc Anh',
            'phone_consignee'=>'0359875621',
            'order_id'=>1,
            'product_id'=>1],

            ['quantity'=>22,
            'payment'=>'Payment on delivery',
            'shipping_address'=>'234 3 thang 2',
            'consignee_name'=>'Dang Xuan Quang',
            'phone_consignee'=>'0359871221',
            'order_id'=>2,
            'product_id'=>4],

            ['quantity'=>1,
            'payment'=>'Payment on delivery',
            'shipping_address'=>'234 Phan Van Tri',
            'consignee_name'=>'Bui Gia Hung',
            'phone_consignee'=>'0359875665',
            'order_id'=>3,
            'product_id'=>6],

            ['quantity'=>12,
            'payment'=>'Payment on delivery',
            'shipping_address'=>'234 Nguyen Chi Thanh',
            'consignee_name'=>'Nguyen Chi Thanh',
            'phone_consignee'=>'0459875621',
            'order_id'=>4,
            'product_id'=>2],
        ]);
    }
}