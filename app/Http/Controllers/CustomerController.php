<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
// use App\Http\Middleware\User;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

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
                'cus_phone' =>  'bail|required|regex:/^0[1-9]\d{8,9}$/i',
                'cus_phone' => 'unique:Customer,phone,' . $cus->id,
                'cus_address' => 'bail|required',
                // 'cus_feature' => 'bail|required|image',

            ],
            [
                'cus_customer_name.min' => 'Customer Name has min 3 characters !',
                'cus_customer_name.max' => 'Customer Name has max 255 characters !',
                'cus_customer_name.required' => 'Customer Name can not blank !',
                'cus_dob.required' => 'Birthday can not blank !',
                'cus_dob.date' => 'The date of birth must be of type DATE !',
                'cus_gender.required'    =>  'Please choose one of them !',
                'cus_phone.required' =>  'Phone can not blank !',
                'cus_phone.regex' =>  'Phone numbers must have at least 10 numbers and at most 11 numbers !',
                'cus_phone.unique' =>  'Phone has already existed !',
                'cus_address.required' => 'Address can not blank !',
                // 'cus_feature.required' => 'Feature can not blank !',
                // 'cus_feature.image' => 'Feature must be the image !',
            ]
        );

        $cus->customer_name = $request->cus_customer_name;
        $cus->dob = $request->cus_dob;
        $cus->gender = $request->cus_gender;
        $cus->phone = $request->cus_phone;
        $cus->address = $request->cus_address;
        // if ($request->hasFile('cus_feature')) {
        //     $file = $request->file('cus_feature');
        //     $extension = $file->getClientOriginalExtension();

        //     if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
        //         return redirect("admin/customer/updateCustomer")->with('Message', 'You can only upload image with file jpg/png/jpeg');
        //     }
        //     $featureCustomer = $file->getClientOriginalName();
        //     $file->move("img/feature/", $featureCustomer);
        //     $cus->feature = $featureCustomer;
        // } else {
        //     $featureCustomer = "";
        // }
        if ($request->hasFile('cus_feature')) {
            $file = $request->file('cus_feature');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/product/updateProduct")->with(['flash_level' => 'danger','flash_message' => 'You can only upload image with file .jpg | .png | .jpeg!' ]);
            }
            $featureCustomer = $file->getClientOriginalName();
            $file->move("img/feature/", $featureCustomer);
            $cus->feature_image = $featureCustomer;
        } else {
            $featureCustomer = "";
        }
        $cus->save();
        return redirect()->action('CustomerController@listCustomer')->with(['flash_level' => 'success', 'flash_message' => 'Update Customer Successfully !']);
    }
    // Create Admin
    public function createAdmin()
    {
        return view("admin.customer.createCustomer");
    }
    // Post Create Admin
    public function postcreateAdmin(Request $request)
    {
        $this->validate(
            $request,
            [
                'CC_user_name' => 'bail|required|string|max:255',
                'CC_customer_name' => 'bail|required|string|max:255',
                'CC_gender' => 'bail|required|not_in:0',
                'CC_dob' => 'bail|required|date',
                'CC_phone' => 'bail|required|regex:/^0[1-9]\d{8,9}$/i|unique:Customer,phone',
                'CC_address' => 'bail|required|string|max:255',
                'CC_email' => 'bail|required|string|regex:/^[a-zA-Z0-9\._]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9]+[\.a-zA-Z0-9]*$/i|max:255|unique:users,email',
                'CC_feature' => 'bail|required|image',
                'CC_confirm_password' => 'bail|required|min:8|string|required_with:CC_password|same:CC_password',
                'CC_password' => 'bail|required|string|min:8',

            ],
            [
                'CC_user_name.required' => 'User Name can not blank !',
                'CC_user_name.max' => 'User Name has max 255 characters !',
                'CC_customer_name.required' => 'Customer Name can not blank !',
                'CC_customer_name.max' => 'Customer Name has max 255 characters !',
                'CC_gender.required' => 'Please choose one of them !',
                'CC_dob.required' => 'Birthday can not blank !',
                'CC_dob.date' => 'The date of birth must be of type DATE !',
                'CC_phone.required' => 'Phone can not blank !',
                'CC_phone.regex' => 'Phone numbers must have at least 10 numbers and at most 11 numbers !',
                'CC_phone.unique' => 'Phone has already existed !',
                'CC_address.required' => 'Address can not blank !',
                'CC_address.max' => 'Address has max 255 characters !',
                'CC_email.required' => 'Email can not blank !',
                'CC_email.regex' => 'The format must be EMAIL style',
                'CC_email.max' => 'Email has max 255 characters !',
                'CC_email.unique' => 'Email has already existed !',
                'CC_feature.required' => 'Feature can not blank !',
                'CC_feature.image' => 'Feature must be the image !',
                'CC_confirm_password.required' => 'The password confirmation can not blank !',
                'CC_confirm_password.same' => 'The password confirmation does not match.',
                'CC_confirm_password.min' => 'The password confirmation has min 8 characters !',
                'CC_password.required' => 'The password can not blank !',
                'CC_password.min' => 'The password has min 8 characters !',

            ]
        );

        $userA = new User();
        $customerA = new Customers();

        $userA->name = $request->CC_user_name;
        $userA->email = $request->CC_email;
        $userA->password = Hash::make($request->CC_password);
        $userA->role = $request->CC_role;
        $userA->save();

        $customerA->users_id = $userA->id;
        $customerA->customer_name = $request->CC_customer_name;
        $customerA->gender = $request->CC_gender;
        $customerA->dob = $request->CC_dob;
        $customerA->phone = $request->CC_phone;
        $customerA->address = $request->CC_address;

        $file = $request->file('CC_feature');
        $featureCustomer = $file->getClientOriginalName();
        $file->move("img/feature/", $featureCustomer);
        $customerA->feature = $featureCustomer;

        $customerA->save();
        return redirect()->action('CustomerController@listCustomer')->with(['flash_level' => 'success', 'flash_message' => 'Create New Admin Successfully !']);
    }
}
