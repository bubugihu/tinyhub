<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
class CustomerController extends Controller
{
    public function listCustomer(){
        $customer = Customers::join('users','users.id','=','customer.users_id')
        ->select('users.*','customer.*')
        ->get();
        return view('admin/customer/listCustomer', compact('customer'));
    }

}
