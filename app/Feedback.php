<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";

    // Declare primary key on table
    protected $primaryKey = "id";

    // Set default primary key auto increment
    public $incrementing = false;

    protected $fillable = ['id', 'feed_title', 'feed_content', 'feed_phone', 'feed_status', 'feed_email', 'feed_date',
	'feed_rep'];
}
