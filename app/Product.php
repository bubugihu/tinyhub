<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    // Declare table in DB match with model
    protected $table = "products";

    // Declare primary key on table
    protected $primaryKey = "id";

    // Set default primary key auto increment
    public $incrementing = false;

    protected $fillable = ['id', 'product_name', 'price', 'stock', 'status', 'bestbuy', 'short_description', 'long_description', 'created_at', 'updated_at'];
}
