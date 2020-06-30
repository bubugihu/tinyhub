<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Customers;

class UserController extends Controller
{
    public function listUsers(){
        $user = User::all();
        $stt= 0;
        return view("admin.users.listUsers", compact('user','stt'));
    }
    public function createUser(Request $request){

        //validate
        $this->validate(
            $request,
            [
                'name'          => ['bail','required', 'string', 'max:255'],
                'email'         => ['bail','required', 'string', 'email', 'max:255', 'unique:users'],
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
    public function updateUserForm($id){
        $users = User::find($id);
        return view('admin.users.updateUser',compact('users');)
    }    

    //update user
    public function updateUser(Request $request, $id){
        $user = User::find($id)->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'role'      => $request->role,
            'password'  => $request->password,
        ]);
        $user->save();
        
        return redirect('admin/users/listUsers');
    }
}
