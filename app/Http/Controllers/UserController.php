<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Customers;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // List Users
    public function listUsers()
    {
        $user = User::where('users.role',0)->get();
        $stt = 0;
        return view("admin.users.listUsers", compact('user', 'stt'));
    }

    //Go To Update Form User
    public function updateUser($id)
    {
        $users = User::find($id);
        return view('admin.users.updateUser', compact('users'));
    }

    //Update User
    public function postUpdateUser(Request $request, User $user)
    {
        // validate
        Validator::make($request->all(), [
            'name'          => ['bail', 'required', 'string', 'max:255'],
        ])->validate();
        $users = User::find($request->id);
        $users->name         = trim($request->name);
        $users->role          = $request->role;
        $users->save();

        return redirect()->action('UserController@listUsers')->with(['flash_level' => 'success', 'flash_message' => 'Update account success !']);;
    }

    public function listAdmin()
    {
        $userAdmin = User::whereBetween('users.role',[1, 3])->get();
        $sttAdmin = 0;
        return view("admin.users.listAdmin", compact('userAdmin', 'sttAdmin'));
    }

    //Go To Update Form Admin
    public function updateAdmin($id)
    {
        $users = User::find($id);
        return view('admin.users.updateAdmin', compact('users'));
    }

    //Update Admin
    public function postUpdateAdmin(Request $request, User $user)
    {
        // validate
        Validator::make($request->all(), [
            'name'          => ['bail', 'required', 'string', 'max:255'],
        ])->validate();
        $users = User::find($request->id);
        $users->name         = trim($request->name);
        $users->role          = $request->role;
        $users->save();

        return redirect()->action('UserController@listAdmin')->with(['flash_level' => 'success', 'flash_message' => 'Update account success !']);;
    }

    //change profile user
    public function postUpdateProfileUser(Request $request, $id)
    {
        $use = User::find($id);
        $cust = Customers::where('users_id', $id)->first();
        $this->validate(
            $request,
            [
                'profile_user_name' => 'bail|required|min:3|max:255',
                'profile_customer_name' => 'bail|required|min:3|max:255',
                'profile_gender' => 'bail|required|not_in:0',
                'profile_dob' => 'bail|required|date',
                'profile_phone' => 'bail|required|regex:/^0[1-9]\d{8,9}$/i',
                'profile_phone' => 'unique:Customer,phone,' . $cust->id,
                'profile_address' => 'bail|required',
                'profile_email' => 'bail|required|email',
                'profile_email' => 'unique:users,email,' . $use->id,
                'profile_feature' => 'bail|required|image',

            ],
            [
                'profile_user_name.required' => 'User Name can not blank !',
                'profile_user_name.min' => 'User Name has min 3 characters !',
                'profile_user_name.max' => 'User Name has max 255 characters !',
                'profile_customer_name.required' => 'Customer Name can not blank !',
                'profile_customer_name.min' => 'Customer Name has min 3 characters !',
                'profile_customer_name.max' => 'Customer Name has max 255 characters !',
                'profile_gender.required' => 'Please choose one of them !',
                'profile_dob.required' => 'Birthday can not blank !',
                'profile_dob.date' => 'The date of birth must be of type DATE !',
                'profile_phone.required' => 'Phone can not blank !',
                'profile_phone.regex' => 'Phone numbers must have at least 10 numbers and at most 11 numbers !',
                'profile_phone.unique' => 'Phone has already existed !',
                'profile_address.required' => 'Address can not blank !',
                'profile_email.required' => 'Email can not blank !',
                'profile_email.email' => 'The format must be EMAIL style',
                'profile_email.unique' => 'Email has already existed !',
                'profile_feature' => 'Feature can not blank !',
                'profile_feature' => 'Feature must be the image !',
            ]
        );
        $use->name = $request->profile_user_name;
        $cust->customer_name = $request->profile_customer_name;
        $cust->gender = $request->profile_gender;
        $cust->dob = $request->profile_dob;
        $cust->phone = $request->profile_phone;
        $cust->address = $request->profile_address;
        $use->email = $request->profile_email;
        if ($request->hasFile('profile_feature')) {
            $file = $request->file('profile_feature');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/customer/updateCustomer")->with('Message', 'You can only upload image with file jpg/png/jpeg');
            }
            $featureCustomer = $file->getClientOriginalName();
            $file->move("img/feature/", $featureCustomer);
            $cust->feature = $featureCustomer;
        } else {
            $featureCustomer = "";
        }
        $use->save();
        $cust->save();
        return redirect('users/profile/' . $id)->with(['flash_level' => 'success', 'flash_message' => 'Update Profile Customer Successfully !']);
    }

    //change profile admin
    public function postUpdateProfileAdmin(Request $request, $id)
    {
        $use = User::find($id);
        $cust = Customers::where('users_id', $id)->first();
        $this->validate(
            $request,
            [
                'profile_user_name' => 'bail|required|min:3|max:255',
                'profile_customer_name' => 'bail|required|min:3|max:255',
                'profile_gender' => 'bail|required|not_in:0',
                'profile_dob' => 'bail|required|date',
                'profile_phone' => 'bail|required|regex:/^0[1-9]\d{8,9}$/i',
                'profile_phone' => 'unique:Customer,phone,' . $cust->id,
                'profile_address' => 'bail|required',
                'profile_email' => 'bail|required|email',
                'profile_email' => 'unique:users,email,' . $use->id,
                'profile_feature' => 'bail|required|image',

            ],
            [
                'profile_user_name.required' => 'User Name can not blank !',
                'profile_user_name.min' => 'User Name has min 3 characters !',
                'profile_user_name.max' => 'User Name has max 255 characters !',
                'profile_customer_name.required' => 'Customer Name can not blank !',
                'profile_customer_name.min' => 'Customer Name has min 3 characters !',
                'profile_customer_name.max' => 'Customer Name has max 255 characters !',
                'profile_gender.required' => 'Please choose one of them !',
                'profile_dob.required' => 'Birthday can not blank !',
                'profile_dob.date' => 'The date of birth must be of type DATE !',
                'profile_phone.required' => 'Phone can not blank !',
                'profile_phone.regex' => 'Phone numbers must have at least 10 numbers and at most 11 numbers !',
                'profile_phone.unique' => 'Phone has already existed !',
                'profile_address.required' => 'Address can not blank !',
                'profile_email.required' => 'Email can not blank !',
                'profile_email.email' => 'The format must be EMAIL style',
                'profile_email.unique' => 'Email has already existed !',
                'profile_feature' => 'Feature can not blank !',
                'profile_feature' => 'Feature must be the image !',
            ]
        );
        $use->name = $request->profile_user_name;
        $cust->customer_name = $request->profile_customer_name;
        $cust->gender = $request->profile_gender;
        $cust->dob = $request->profile_dob;
        $cust->phone = $request->profile_phone;
        $cust->address = $request->profile_address;
        $use->email = $request->profile_email;
        if ($request->hasFile('profile_feature')) {
            $file = $request->file('profile_feature');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/customer/updateCustomer")->with('Message', 'You can only upload image with file jpg/png/jpeg');
            }
            $featureCustomer = $file->getClientOriginalName();
            $file->move("img/feature/", $featureCustomer);
            $cust->feature = $featureCustomer;
        } else {
            $featureCustomer = "";
        }
        $use->save();
        $cust->save();
        return redirect('admin/profile/' . $id)->with(['flash_level' => 'success', 'flash_message' => 'Update Profile Customer Successfully !']);
    }

    //profile user
    public function profileUser($id)
    {
        $user = User::find($id);
        $customer = Customers::where('users_id', $id)->first();
        $no = 0;
        $no1 = 0;

        $order = Order::join('order_details', 'order.id', '=', 'order_details.order_id')
            ->join('product', 'order_details.product_id', '=', 'product.id')
            ->where('order.customer_id', $id)
            ->groupBy('order_details.order_id', 'order.payment', 'order.created_at', 'order.status')
            ->select('order_details.order_id', DB::raw('SUM(product.price * order_details.quantity) as total'), 'order.payment', 'order.created_at', 'order.status')
            ->get();

        $comment = Comment::join('customer', 'comments.customer_id', '=', 'customer.id')
            ->join('product', 'comments.product_id', '=', 'product.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->where('comments.customer_id', $id)
            ->select('product.*', 'comments.*')
            ->get();

        return view('users.profile.profile', compact('user', 'customer', 'order', 'comment', 'no', 'no1'));
    }

    //profile admin
    public function profileAdmin($id)
    {
        $user = User::find($id);
        $customer = Customers::where('users_id', $id)->first();
        $no = 0;
        $no1 = 0;

        $order = Order::join('order_details', 'order.id', '=', 'order_details.order_id')
            ->join('product', 'order_details.product_id', '=', 'product.id')
            ->where('order.customer_id', $id)
            ->groupBy('order_details.order_id', 'order.payment', 'order.created_at', 'order.status')
            ->select('order_details.order_id', DB::raw('SUM(product.price * order_details.quantity) as total'), 'order.payment', 'order.created_at', 'order.status')
            ->get();

        $comment = Comment::join('customer', 'comments.customer_id', '=', 'customer.id')
            ->join('product', 'comments.product_id', '=', 'product.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->where('comments.customer_id', $id)->where('comments.cmt_status', 0)
            ->select('product.*', 'comments.*')
            ->get();

        return view('admin.profile.profile', compact('user', 'customer', 'order', 'comment', 'no', 'no1'));
    }

    //delete comment user
    public function deleteCommentUser($id, $idcomment)
    {
        $deleteCommentUser = Comment::where('comments.customer_id', $id)->where('comments.id', $idcomment)->delete();
        return redirect('users/profile/' . $id)->with(['flash_level' => 'success', 'flash_message' => 'Delete Comment Successfully !']);
    }

    //delete comment admin
    public function deleteCommentAdmin($id, $idcomment)
    {
        $deleteCommentUser = Comment::where('comments.customer_id', $id)->where('comments.id', $idcomment)->delete();
        return redirect('admin/profile/' . $id)->with(['flash_level' => 'success', 'flash_message' => 'Delete Comment Successfully !']);
    }
}
