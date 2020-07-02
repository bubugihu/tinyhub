<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = "customer";
    public $timestamps=true;
    // Declare primary key on table

    protected $fillable = ['id', 'customer_name', 'dob', 'gender', 'phone', 'address', 'feature', 'users_id'];

    public function roleUser(){
        return $this->belongsTo(User::class,'users_id','id');
    }

    public function roleOrder(){
        return $this->hasMany(Order::class);
    }

    public function roleComment(){
        return $this->hasMany(Comment::class);
    }
}
