<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";

    public $fillable =['id' , 'category_name', 'category_image' , 'description'];
    public $timestamps = true; // Force to have
    public $incrementing = true; // Force to have
    public function roleProduct(){
        return $this->hasMany(Product::class);
    }
}
