<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Sms_helper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        $name=$data['name'];
        $username=$data['username'];
        $email=$data['email'];
        $password=Hash::make($data['password']);
        $birthdate=$data['birthdate'];
        $fcmtoken=$data['fcmtoken'];
        $city_id=$data['city_id'];
        $code=Sms_helper::RandomString();
        $mobile=$data['mobile'];
        $user=User::user_create($name,$username,$email,$password,$birthdate,$fcmtoken,$os,$city_id,$code,$mobile);
        Sms_helper::send_sms_post($user->mobile,$user->code);
        return Auth::loginUsingId($user->id);
    }
}
