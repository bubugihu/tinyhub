<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    public $timestamps=true;
    protected $fillable = ['cmt_title', 'cmt_content', 'cmt_status', 'product_id', 'customer_id','created_at'];

    public function roleProduct(){
        return $this->belongsTo(Product::class);
    }

    public function roleCustomer(){
        return $this->belongsTo(Customer::class);
    }
}
