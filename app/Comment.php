<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = ['cmt_title', 'cmt_content', 'cmt_status', 'cmt_date', 'product_id', 'customer_id'];
}
