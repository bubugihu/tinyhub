<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";
    public $timestamps=false;
    public $fillable =['id' , 'category_name', 'description'];

    public function roleProduct(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
