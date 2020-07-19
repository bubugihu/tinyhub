<?php

namespace App\Http\Controllers;

use App\Customers;
use App\User;


class AjaxController extends Controller
{
    public function registerEmail($email){
        $check = User::where('email',$email)->get()->count();
        if($check > 0){
            echo "<strong style='font-size: 11px'>The email has already been taken.</strong>";
        }
    }

    public function registerPhone($phone){
        $check = Customers::where('phone',$phone)->get()->count();
        if($check > 0){
            echo "<strong style='font-size: 11px'>The phone has already been taken.</strong>";
        }
    }

   
}
