<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    // Declare table in DB match with model
    protected $table = "product";

    protected $fillable = ['id', 'product_title', 'price', 'short_descriptions', 'long_descriptions', 'status', 'sold_out', 'feature_image', 'warranty_period', 'created_product', 'category_id', 'brand_id'];

    public function roleCategory(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
