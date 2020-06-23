<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";

    // Declare primary key on table
    protected $primaryKey = "id";

    // Set default primary key auto increment
    public $incrementing = false;

    protected $fillable = ['id', 'product_id', 'product_gallery'];

}
