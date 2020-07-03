<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
// use App\Http\Middleware\User;
use Illuminate\Support\Facades\Auth;
use App\User;

class CustomerController extends Controller
{
    public function listCustomer()
    {
        $customer = Customers::join('users', 'users.id', '=', 'customer.users_id')
            ->select('users.*', 'customer.*')
            ->get();
        return view('admin/customer/listCustomer', compact('customer'));
    }

    public function updateCustomer($id)
    {
        $customer = Customers::find($id);
        return view('admin.customer.updateCustomer', compact('customer'));
    }

    //Function Update Customer
    public function postUpdateCustomer(Request $request, $id)
    {
        $cus = Customers::find($id);

        $this->validate(
            $request,
            [
                'cus_customer_name' => 'bail|min:3|max:255|required',
                'cus_dob'   =>  'bail|required|date',
                'cus_gender'    =>  'bail|required|not_in:0',
                'cus_phone' =>  'bail|required|digits:10,12|unique:Customer,phone',
                'cus_address' => 'bail|required',
                'cus_feature' => 'bail|required|image',

            ],
            [
                'cus_customer_name.min' => 'Customer Name has min 3 characters !',
                'cus_customer_name.max' => 'Customer Name has max 255 characters !',
                'cus_customer_name.required' => 'Customer Name can not blank !',
                'cus_dob.required' => 'Birthday can not blank !',
                'cus_dob.date' => 'The date of birth must be of type DATE !',
                'cus_gender.required'    =>  'Please choose one of them !',
                'cus_phone.required' =>  'Phone can not blank !',
                'cus_phone.digits' =>  'Phone numbers must have at least 10 numbers and at most 12 numbers !',
                'cus_phone.unique' =>  'Phone has already existed !',
                'cus_address.required' => 'Address can not blank !',
                'cus_feature.required' => 'Feature can not blank !',
                'cus_feature.image' => 'Feature must be the image !',
            ]
        );

        $cus->customer_name = $request->cus_customer_name;
        $cus->dob = $request->cus_dob;
        $cus->gender = $request->cus_gender;
        $cus->phone = $request->cus_phone;
        $cus->address = $request->cus_address;
        if ($request->hasFile('cus_feature')) {
            $file = $request->file('cus_feature');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/customer/updateCustomer")->with('Message', 'You can only upload image with file jpg/png/jpeg');
            }
            $featureCustomer = $file->getClientOriginalName();
            $file->move("img/feature/", $featureCustomer);
            $cus->feature = $featureCustomer;
        } else {
            $featureCustomer = "";
        }
        $cus->save();

        return redirect()->action('CustomerController@listCustomer')->with(['flash_level' => 'success', 'flash_message' => 'Update Customer Successfully !']);
    }

    public function deleteCustomer($id)
    {
        $deleteCustomer=User::find($id)->delete();
        $deleteCustomer = Customers::join('users', 'users.id', '=', 'customer.users_id')
        ->where('customer.id',$id)->where('users.id','customer.users_id')->delete();

        return redirect()->action('CustomerController@listCustomer')->with(['flash_level' => 'success', 'flash_message' => 'Delete Customer Successfully !']);
    }
}

