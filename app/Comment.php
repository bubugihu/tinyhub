<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = ['cmt_title', 'cmt_content', 'cmt_status', 'cmt_date', 'product_id', 'customer_id'];

    public function roleProduct(){
        return $this->belongsTo(Product::class);
    }

    public function roleCustomer(){
        return $this->belongsTo(Customer::class);
    }
}
