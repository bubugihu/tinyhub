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
                'name'          => ['bail','required', 'string', 'max:255'],
                'email'         => ['bail','required', 'string', 'regex:/^[a-zA-Z0-9.!#$%&]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+[.a-zA-Z0-9]*$/i', 'max:255', 'unique:users'],
                'password'      => ['bail','required', 'string', 'min:8', 'confirmed'],
                'fullname'      => ['bail','required','string','max:255'],
                'phone'         => ['bail','required','regex:/^0[0-9]{9}$/i','unique:customer'],
                'dob'           => ['bail','required'],
                'address'       => ['bail','required','string','max:255' ], 
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
    public function updateUser($id){
        $users = User::find($id);
        return view('admin.users.updateUser',compact('users'));
    }    

    //update user
    public function postUpdateUser(Request $request,User $user){
       // validate
        Validator::make($request->all(), [
                'name'          => ['bail','required', 'string', 'max:255'],
        ])->validate();
        $users = User::find($request->id);
        $users->name         = $request->name;
        $users->role          = $request->role;
        $users->save();
        
        return redirect('admin/users/listUsers');
    }

    public function profileUser($id)
    {
        $user = User::find($id);
        $customer = Customers::find($id);
        $no = 0;
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

        return view('users.profile.profile', compact('user', 'customer', 'order', 'comment', 'no'));
    }

    public function profileAdmin($id)
    {
        $user = User::find($id);
        $customer = Customers::find($id);
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
        //Image Featru
        // if (Auth::check()) {
        //     $customer = Customers::find(Auth::user()->id)->feature;
        // }
        //end Image Featru
        return view('admin.profile.profile', compact('user', 'customer', 'order', 'comment', 'no'));
    }
}
