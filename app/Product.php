<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    // Declare table in DB match with model
    protected $table = "product";

    public $timestamps = false;

    public $incrementing = true;
    //
    protected $fillable = ['id', 'product_title', 'price', 'sold_out', 'status', 'short_descriptions', 'long_descriptions','feature_image','warranty_period','category_id', 'created_at','brand_id'];
    //
    public function roleCategory(){
        return $this->belongsTo(Category::class);
    }
    //
    public function roleBrand(){
        return $this->belongsTo(Brands::class);
    }
    //
    public function roleGallery(){
        return $this->hasMany(Gallery::class);
    }
    //
    public function roleComment(){
        return $this->hasMany(Comment::class);
    }
}
