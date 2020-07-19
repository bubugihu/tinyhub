<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_details";
    // Declare primary key on table
    public $incrementing = true;
    protected $primaryKey = "id";
    public $timestamps=true;

    protected $fillable = ['id','quantity', 'order_id', 'product_id', 'created_at', 'updated_at'];
    
    public function roleProduct(){
        return $this->hasMany(Product::class);
    }

    public function roleOrder(){
        return $this->belongsTo(Order::class);
    }


}
