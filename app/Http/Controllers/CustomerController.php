<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
// use App\Http\Middleware\User;
use Illuminate\Support\Facades\Auth;
use App\User;

class CustomerController extends Controller
{
    public function listCustomer(){
        $customer = Customers::join('users','users.id','=','customer.users_id')->select('users.*','customer.*')->get();
        return view('admin.customer.listCustomer', compact('customer'));
    }
    // public function detailsCustomer(){
    //     $detailCutomer=Customers::join('users','users.id','=','customer.users_id')->select('users.*','customer.*')->where('customer.id',Auth::user()->id)->get();
    //     return view('admin.customer.listCustomer', compact('detailCustomer'));
    // }
}
