<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\Feedback;
use App\User;

class UserController extends Controller
{
    public function listUsers(){
        return view("admin.listUsers");
    }
    public function createUser(){
        return view('admin.createUser');
    }

    public function listCustomer(){
        $customer = Customers::join('users','users.id','=','customer.users_id')->select('users.*','customer.*')->get();
        return view('admin/customer/listCustomer', compact('customer'));
    }

    public function feedbackList(){
        $feedback = Feedback::all();
        return view('admin/comment/feedbackList', compact('feedback'));
    }
}
