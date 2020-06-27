<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_details";

    protected $fillable = ['quantity', 'note', 'payment', 'shipping_address', 'consignee_name', 'phone_consignee', 'order_id', 'product_id', 'created_at', 'updated_at'];
    
    


}
