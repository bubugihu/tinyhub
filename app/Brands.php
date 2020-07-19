<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = "brand";

    // Declare primary key on table
    protected $primaryKey = "id";

    // Set default primary key auto increment

    public $timestamps = false;

    public $incrementing = true;

    protected $fillable = ['id', 'brand_name', 'brand_iamge', 'description'];

    public function roleProduct(){
        return $this->hasMany(Product::class,'brand_id','id');
    }

}
