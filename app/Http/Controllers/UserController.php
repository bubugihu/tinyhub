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
    public function listUsers()
    {
        $user = User::join('customer', 'customer.id', '=', 'users.id')->select('users.*', 'customer.*')->get();
        $stt = 0;
        return view("admin.users.listUsers", compact('user', 'stt'));
    }
    public function createUser(Request $request)
    {

        //validate
        $this->validate(
            $request,
            [
                'name'          => ['bail', 'required', 'string', 'max:255'],
                'email'         => ['bail', 'required', 'string', 'regex:/^[a-zA-Z0-9.!#$%&]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+[.a-zA-Z0-9]*$/i', 'max:255', 'unique:users'],
                'password'      => ['bail', 'required', 'string', 'min:8', 'confirmed'],
                'fullname'      => ['bail', 'required', 'string', 'max:255'],
                'phone'         => ['bail', 'required', 'regex:/^0[0-9]{9}$/i', 'unique:customer'],
                'dob'           => ['bail', 'required'],
                'address'       => ['bail', 'required', 'string', 'max:255'],
            ]
        );
        //
        //create user
        $user =   User::create([
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'role'          =>  $request->role,
            'password'      =>  Hash::make($request->password),
        ]);

        $user->roleCustomer =   Customers::create([
            'customer_name' =>  $request->fullname,
            'dob'           =>  $request->dob,
            'gender'        =>  $request->gender,
            'phone'         =>  $request->phone,
            'address'       =>  $request->address,
            'feature'       =>  'tinyhub-logo-footer.png',
            'users_id'      =>  $user->id,
        ]);

        return redirect('admin/users/listUsers');
    }

    //go to update Form
    public function updateUser($id)
    {
        $users = User::find($id);
        return view('admin.users.updateUser', compact('users'));
    }

    //update user
    public function postUpdateUser(Request $request, User $user)
    {
        // validate
        Validator::make($request->all(), [
            'name'          => ['bail', 'required', 'string', 'max:255'],
        ])->validate();
        $users = User::find($request->id);
        $users->name         = $request->name;
        $users->role          = $request->role;
        $users->save();

        return redirect('admin/users/listUsers');
    }

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
                'profile_phone' => 'bail|required|digits:10,12|unique:Customer,phone',
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
                'profile_phone.digits' => 'Phone numbers must have at least 10 numbers and at most 12 numbers !',
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

    public function profileUser($id)
    {
        $user = User::find($id);
        $customer = Customers::find($id);
        $no = 0;
        $no1 = 0;
        // $order = User::join('customer', 'users.id', '=', 'customer.users_id')
        //     ->join('order', 'customer.id', '=', 'order.customer_id')
        //     // ->join('order_details', 'order.id', '=', 'order_details.order_id')
        //     // ->join('product', 'order_details.product_id', '=', 'product.id')
        //     ->select('users.*', 'customer.*', 'order.*')
        //     ->where('order.customer_id', $id)
        //     ->get();

        $order = Order::join('order_details', 'order.id', '=', 'order_details.order_id')
            ->join('product', 'order_details.product_id', '=', 'product.id')
            ->where('order.customer_id', $id)
            ->groupBy('order_details.order_id', 'order.payment', 'order.created_at')
            ->select('order_details.order_id', DB::raw('SUM(product.price * order_details.quantity) as total'), 'order.payment', 'order.created_at')
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

    public function deleteCommentUser($id, $idcomment)
    {
        // $deleteCommentUser=Customers::join('comments','id','=','comments.customer_id')
        // ->where('customer.id',$id)->where('comments.id',$idcomment)->delete();
        $deleteCommentUser = Comment::where('comments.customer_id', $id)->where('comments.id', $idcomment)->delete();
        // return redirect()->action('UserController@profileUser')->with(['flash_level' => 'success', 'flash_message' => 'Delete Comment Successfully !']);
        return redirect('users/profile/' . $id)->with(['flash_level' => 'success', 'flash_message' => 'Delete Comment Successfully !']);
    }
    public function profileAdmin($id)
    {
        $user = User::find($id);
        $customer = Customers::where('users_id', $id);
        $no = 0;

        $order = Order::join('order_details', 'order.id', '=', 'order_details.order_id')
            ->join('product', 'order_details.product_id', '=', 'product.id')
            ->where('order.customer_id', $id)
            ->groupBy('order_details.order_id', 'order.payment', 'order.created_at')
            ->select('order_details.order_id', DB::raw('SUM(product.price * order_details.quantity) as total'), 'order.payment', 'order.created_at')
            ->get();

        $comment = Comment::join('customer', 'comments.customer_id', '=', 'customer.id')
            ->join('product', 'comments.product_id', '=', 'product.id')
            ->join('brand', 'product.brand_id', '=', 'brand.id')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->where('comments.customer_id', $id)
            ->select('product.*', 'comments.*')
            ->get();
        return view('admin.profile.profile', compact('user', 'customer', 'order', 'comment', 'no'));
    }
}
