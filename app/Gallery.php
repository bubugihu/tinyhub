<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";

    // Declare primary key on table
    protected $primaryKey = "id";

    protected $fillable = ['id', 'product_id', 'product_gallery'];
    
    public function roleProduct(){
        return $this->belongsTo(Product::class);
    }
}
