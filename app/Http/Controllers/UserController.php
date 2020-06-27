<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function listUsers(){
        $user = User::all();
        $stt= 0;
        return view("admin.users.listUsers", compact('user','stt'));
    }
    public function createUser(){
        return view('admin.users.createUser');
    }

}
