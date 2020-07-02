<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banner";
    public $timestamps=true;
    // Declare primary key on table
    protected $primaryKey = "id";

    // Set default primary key auto increment
    

    protected $fillable = ['id', 'ban_title', 'ban_content', 'ban_image', 'ban_date'];

    
}
