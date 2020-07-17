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
        $user = User::where('users.role', 0)->get();
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
        $userAdmin = User::whereBetween('users.role', [1, 3])->get();
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
                'profile_phone' => 'bail|required|regex:/^0[1-9]\d{8,9}$/i|unique:Customer,phone,' . $cust->id,
                // 'profile_phone' => 'unique:Customer,phone,' . $cust->id,
                'profile_address' => 'bail|required',
                'profile_email' => 'bail|required|email|unique:users,email,' . $use->id,
                // 'profile_email' => 'unique:users,email,' . $use->id,

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
                'profile_phone.regex' => 'Phone must begin 0 and has 10 or 11 digits. !',
                'profile_phone.unique' => 'Phone has already existed !',
                'profile_address.required' => 'Address can not blank !',
                'profile_email.required' => 'Email can not blank !',
                'profile_email.email' => 'The format must be EMAIL style',
                'profile_email.unique' => 'Email has already existed !',
            ]
        );
        $use->name = $request->profile_user_name;
        $cust->customer_name = $request->profile_customer_name;
        $cust->gender = $request->profile_gender;
        $cust->dob = $request->profile_dob;
        $cust->phone = $request->profile_phone;
        $cust->address = $request->profile_address;
        $use->email = $request->profile_email;
        // if ($request->hasFile('profile_feature')) {
        //     $file = $request->file('profile_feature');
        //     $extension = $file->getClientOriginalExtension();

        //     if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
        //         return redirect("admin/customer/updateCustomer")->with('Message', 'You can only upload image with file jpg/png/jpeg');
        //     }
        //     $featureCustomer = $file->getClientOriginalName();
        //     $file->move("img/feature/", $featureCustomer);
        //     $cust->feature = $featureCustomer;
        // } else {
        //     $featureCustomer = "";
        // }
        if ($request->hasFile('profile_feature')) {
            $file = $request->file('profile_feature');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/customer/updateCustomer")->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg!']);
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
                'profile_phone' => 'bail|required|regex:/^0[1-9]\d{8,9}$/i|unique:Customer,phone,'. $cust->id,
                // 'profile_phone' => 'unique:Customer,phone,' . $cust->id,
                'profile_address' => 'bail|required',
                'profile_email' => 'bail|required|email|unique:users,email,' . $use->id,
                // 'profile_email' => 'unique:users,email,' . $use->id,
                // 'profile_feature' => 'bail|required|image',

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
                'profile_phone.regex' => 'Phone must begin 0 and has 10 or 11 digits. !',
                'profile_phone.unique' => 'Phone has already existed !',
                'profile_address.required' => 'Address can not blank !',
                'profile_email.required' => 'Email can not blank !',
                'profile_email.email' => 'The format must be EMAIL style',
                'profile_email.unique' => 'Email has already existed !',
                // 'profile_feature' => 'Feature can not blank !',
                // 'profile_feature' => 'Feature must be the image !',
            ]
        );
        $use->name = $request->profile_user_name;
        $cust->customer_name = $request->profile_customer_name;
        $cust->gender = $request->profile_gender;
        $cust->dob = $request->profile_dob;
        $cust->phone = $request->profile_phone;
        $cust->address = $request->profile_address;
        $use->email = $request->profile_email;
        // if ($request->hasFile('profile_feature')) {
        //     $file = $request->file('profile_feature');
        //     $extension = $file->getClientOriginalExtension();

        //     if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
        //         return redirect("admin/customer/updateCustomer")->with('Message', 'You can only upload image with file jpg/png/jpeg');
        //     }
        //     $featureCustomer = $file->getClientOriginalName();
        //     $file->move("img/feature/", $featureCustomer);
        //     $cust->feature = $featureCustomer;
        // } else {
        //     $featureCustomer = "";
        // }

        if ($request->hasFile('profile_feature')) {
            $file = $request->file('profile_feature');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/customer/updateCustomer")->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg!']);
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
            ->where('comments.customer_id', $id)
            // ->where('comments.cmt_status', 0)
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


    //black list
    public function test(Request $request)
    {
        $email = $request->email;
        // $password = Hash::make($request->password);
        $password = $request->password;
        if (!(Auth::attempt(['email' => $email, 'password' => $password])))
            return back()->with(['flash_level' => 'danger', 'flash_message' => 'ID or Password may be incorrect.']);


        elseif (Auth::attempt(['email' => $email, 'password' => $password]))
            if (Auth::user()->role == 5) {
                Auth::logout();
                return back()->with(['flash_level' => 'danger', 'flash_message' => 'You are banned. Please email Tinyhub@gmail.com for reason.']);
            } else
                return redirect()->intended('/');
    }

    public function createAdmin()
    {
        return view("admin.users.createAdmin");
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
        return redirect()->action('UserController@listAdmin')->with(['flash_level' => 'success', 'flash_message' => 'Create New Admin Successfully !']);
    }
}
