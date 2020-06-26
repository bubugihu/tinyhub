<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function listUsers(){
        $user = User::all();
        return view("admin.users.listUsers", compact('user'));
    }
    public function createUser(){
        return view('admin.users.createUser');
    }

}
