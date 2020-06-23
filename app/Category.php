<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    // Declare primary key on table
    protected $primaryKey = "id";

    // Set default primary key auto increment
    public $incrementing = false;

    protected $fillable = ['id', 'category_name', 'description'];
}
