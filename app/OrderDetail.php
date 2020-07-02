<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_details";
    public $timestamps=true;

    protected $fillable = ['quantity', 'order_id', 'product_id', 'created_at', 'updated_at'];
    
    public function roleProduct(){
        return $this->hasMany(Product::class);
    }

    public function roleOrder(){
        return $this->belongsTo(Order::class);
    }


}
