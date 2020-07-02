<?php

namespace App;

use Aws\Api\TimestampShape;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    public $timestamps=false;
    protected $fillable = ['id','cmt_title', 'cmt_content', 'cmt_status', 'product_id', 'customer_id'];

    public function roleProduct(){
        return $this->belongsTo(Product::class);
    }

    public function roleCustomer(){
        return $this->belongsTo(Customer::class);
    }
    
}
