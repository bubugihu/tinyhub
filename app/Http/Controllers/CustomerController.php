<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function listCustomer(){
        return view('admin.customer.listCustomer');
    }

}
