<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banner";

    protected $fillable = ['id', 'ban_title', 'ban_content', 'ban_image', 'ban_date'];
}
