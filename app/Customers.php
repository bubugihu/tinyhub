<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = "customer";

    // Declare primary key on table
    protected $primaryKey = "id";

    // Set default primary key auto increment
    

    protected $fillable = ['id', 'customer_name', 'dob', 'gender', 'phone', 'address', 'feature'];
}
