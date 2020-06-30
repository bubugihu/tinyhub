<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    // Declare primary key on table
    
    public $timestamps=true;

    protected $fillable = ['id','consignee_name','shipping_address', 'phone_consignee','note','payment', 'status', 'customer_id'];

    public function roleOrderDetails(){
        $this->hasOne(OrderDetail::class);
    }

    public function roleCustomer(){
        $this->belongsTo(Customer::class);
    }
}
