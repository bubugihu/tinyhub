<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function role(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){
        $role = Auth::user()->role;
        if($role == 1 || $role == 2 || $role == 3)
        {
            return view('admin.product.listProduct');
        }
        else
        return view('welcome');

    }
}
}
