<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    // Declare table in DB match with model
    protected $table = "product";

    

    public $timestamps=true;
    //
    protected $fillable = ['id', 'product_title', 'price', 'sold_out', 'status', 'short_description', 'long_description','feature_image','warranty_period','category_id', 'created_at','brand_id', 'updated_at'];
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
    
}
