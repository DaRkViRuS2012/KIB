<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Sms_helper;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 


     protected function validator_register(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
             'username' => ['required', 'string', 'max:255','unique:users'],
             'code' => ['unique:users'],
             'mobile' => ['required', 'string', 'max:9','unique:users'],
        ]);
    }


     protected function validator_login(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);
    }


    public function create()
    {
        $cities=City::city_all();
        return view('auth.register',compact('cities'));
    }

 
    public function store(Request $request)
    {
        $validator = $this->validator_register($request->input());
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput(); //TODO

        }
        $name=$request['fname_en'].' '.$request['father_name_en'].' '.$request['lname_en'];
        $username=$request['username'];
        $email=$request['email'];
        $password=Hash::make($request['password']);
        $birthdate=$request['birthdate'];
        $fcmtoken=$request['fcmtoken'];
        $city_id=$request['city_id'];
        $code=Sms_helper::RandomString();
        $mobile=$request['mobile'];
        $os='android';

        $user=User::user_create($name,$username,$email,$password,$birthdate,$fcmtoken,$os,$city_id,$code,$mobile);
        // Sms_helper::send_sms_post($user->mobile,$user->code);
         Auth::loginUsingId($user->id);
         return redirect('/home'); 

       
    }


public function send_sms_post(Request $request)
{
    $mobile=$request['mobile'];
    $message=$request['message'];
        Sms_helper::send_sms_post($mobile,$message);
}


   public function account()
    {
        $id=Auth::id();
        $cities=City::city_all();
        $user=User::user_show($id);
        $name=explode(' ',$user->name);
        return view('main_site.account',compact('user','name','cities'));
    }


    public function login_page()
    {
        return view('auth.login');
    }

public function login(Request $request)
  {
      $validator = $this->validator_login($request->input());
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput(); //TODO

        }

    $email=$request['email'];
    $password=$request['password'];
      //$credentials = $request->only('email', 'password');

      if (Auth::attempt(['email' => $email, 'password' => $password])) {
          // Authentication passed...
        $user= User::where('email',$request->email)->first();
        if($user->is_admin())
        {
          return redirect('/admin');
        }
     return redirect('/');

      }
      return redirect()->intended('/login')->withErrors(['the Email or Password wrong']);
  }

}

