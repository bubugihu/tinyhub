<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function listUsers(){
        return view("admin.users.listUsers");
    }
    public function createUser(){
        return view('admin.users.createUser');
    }

}
