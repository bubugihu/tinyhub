<?php

namespace App\Http\Controllers\Auth;

use App\Customers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'                      => ['bail','required', 'string', 'max:255'],
            'email'                     => ['bail','required', 'string', 'regex:/^[a-zA-Z0-9\._]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9]+[\.a-zA-Z0-9]*$/i', 'max:255', 'unique:users'],
            'password'                  => ['bail','required', 'string', 'min:8', 'confirmed'],
            'password_confirmation'     => ['bail','required'],
            'fullname'                  => ['bail','required','regex:/^[a-zA-Z ]{2,}$/i','max:255'],
            'dob'                       => ['bail','required'],
            'phone'                     => ['bail','required','regex:/^0[1-9]\d{8,9}$/i','unique:customer'],
            'address'                   => ['bail','required','string','min:2','max:255' ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        $user =   User::create([
            'name' => trim($data['name']),
            'email' => trim($data['email']),
            'password' => Hash::make($data['password']),
        ]);
        
         $user->roleCustomer =   Customers::create([
            'customer_name' =>  trim($data['fullname']),
            'dob'           =>  trim($data['dob']),
            'gender'        =>  trim($data['gender']),
            'phone'         =>  trim($data['phone']),
            'address'       =>  trim($data['address']),
            'feature'       =>  'tinyhub-logo-footer.png',
            'users_id'      =>  $user->id,
        ]);
        return $user;
        
    }
}
