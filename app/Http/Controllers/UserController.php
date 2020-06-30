<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function listUsers()
    {
        $user = User::join('customer', 'customer.id', '=', 'users.id')->select('users.*', 'customer.*')->get();
        $stt = 0;
        return view("admin.users.listUsers", compact('user', 'stt'));
    }
    public function createUser()
    {
        return view('admin.users.createUser');
    }
    public function updateUser($id)
    {
        // $user=User::find($id);
        $user = User::join('customer', 'customer.id', '=', 'users.id')->select('users.*', 'customer.*')->where('users.id',$id)->get();
        return view('admin.users.updateUser', compact('user'));
    }
}
