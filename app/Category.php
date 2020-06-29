<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";

    public $fillable =['id' , 'category_name', 'description'];
    public $timestamps = false; // Force to have
    public $incrementing = true;
    public function roleProduct(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
