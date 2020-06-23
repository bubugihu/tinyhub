<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    // Declare primary key on table
    protected $primaryKey = "id";

    // Set default primary key auto increment
    public $incrementing = false;

    protected $fillable = ['id', 'order_date_time', 'status', 'customer_id', 'created_at', 'updated_at'];
}
