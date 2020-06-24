<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = "customer";

    // Declare primary key on table

    protected $fillable = ['id', 'customer_name', 'dob', 'gender', 'phone', 'address', 'feature', 'users_id'];

    public function roleUser(){
        return $this->belongsTo(User::class,'users_id','id');
    }
}
