<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    // Declare table in DB match with model
    protected $table = "product";

    // Declare primary key on table
    protected $primaryKey = "id";

    // Set default primary key auto increment
    public $incrementing = false;

    protected $fillable = ['id', 'product_title', 'short_descriptions', 'long_descriptions', 'status', 'sold_out', 'feature_image', 'warranty_period', 'created_product', 'category_id', 'brand_id'];
}
