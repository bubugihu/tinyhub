<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function role()
    {
            $role = Auth::user()->role;
            if ($role == 1 || $role == 2 || $role == 3) {
                return view('admin.index');
            } else
                return view('home');
        }
}

