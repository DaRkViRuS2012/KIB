<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Sms_helper;
use App\User;
use App\Portal;
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
            'fname_en' => ['required', 'string', 'max:255'],
             'father_name_en' => ['required', 'string', 'max:255'],
              'lname_en' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
             'username' => ['string', 'max:255'],
             'code' => ['unique:users'],
             'mobile' => ['required', 'string', 'max:9','unique:users'],
             'token' => [ 'unique:users'],
        ]);
    }


         protected function validator_update(array $data)
    {
        return Validator::make($data, [
            'fname_en' => ['required', 'string', 'max:255'],
             'father_name_en' => ['required', 'string', 'max:255'],
              'lname_en' => ['required', 'string', 'max:255'],
                'mobile' => ['required', 'string', 'max:9'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
             'username' => ['string', 'max:255'],
             'code' => ['unique:users'],
             'token' => [ 'unique:users'],
        ]);
    }





     protected function validator_login(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);
    }



          public function index()
          {
          $users=User::user_index();
          return view('admin.user.index',compact('users'));
          }



          public function admin_create()
          {
          $cities=City::city_all();
          return view('admin.user.create',compact('cities'));
          }
          public function create()
          {
          $cities=City::city_all();
          return view('auth.register',compact('cities'));
          }



              public function admin_store(Request $request)
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
        $role=$request['role'];
        $code=Sms_helper::RandomString();
        $mobile=$request['mobile'];
        $token=str_replace("/","",Hash::make($name.$email));
        $os='web';

        $user=User::admin_user_create($name,$username,$email,$password,$birthdate,$fcmtoken,$os,$city_id,$code,$mobile,$token,$role);
          // Sms_helper::send_sms($user->mobile,$user->code); 
         // Auth::loginUsingId($user->id);
         return redirect('/admin/user/index'); 

       
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
        $token=str_replace("/","",Hash::make($name.$email));
        $os='web';

        $user=User::user_create($name,$username,$email,$password,$birthdate,$fcmtoken,$os,$city_id,$code,$mobile,$token);
          Sms_helper::send_sms($user->mobile,$user->code); 
         Auth::loginUsingId($user->id);
         return redirect('/'); 

       
    }



        public function store_api(Request $request)
    {
        $validator = $this->validator_register($request->input());
         if ($validator->fails()) {
        return response()->json(['status' => False, 'data' => '', 'message' => $validator->errors()->all(),'type'=>'error']);
        }
        $name=$request['fname_en'].' '.$request['father_name_en'].' '.$request['lname_en'];
        $username=$request['username'];
        $email=$request['email'];
        $password=Hash::make($request['password']);
        $token=str_replace("/","",Hash::make($name.$email));
        $birthdate=$request['birthdate'];
        $fcmtoken=$request['fcmtoken'];
        $city_id=$request['city_id'];
        $code=Sms_helper::RandomString();
        $mobile=$request['mobile'];
        $os=$request['os'];

        $user=User::user_create($name,$username,$email,$password,$birthdate,$fcmtoken,$os,$city_id,$code,$mobile,$token);
        Sms_helper::send_sms($user->mobile,$user->code); 
         return response()->json(['status' => True, 'data' => $user, 'message' => '','type'=>'array']);

       
    }



   public function account()
    {
        $id=Auth::id();
        $cities=City::city_all();
        $user=User::user_show($id);
        $name=explode(' ',$user->name);
        return view('main_site.account',compact('user','name','cities'));
    }


       public function admin_edit(Request $request)
    {
        $id=$request['id'];
        $cities=City::city_all();
        $user=User::user_show($id);
        $name=explode(' ',$user->name);
        return view('admin.user.update',compact('user','name','cities'));
    }


              public function admin_update(Request $request)
    {
        $validator = $this->validator_update($request->input());
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput(); //TODO

        }
        $id=$request['id'];
        $name=$request['fname_en'].' '.$request['father_name_en'].' '.$request['lname_en'];
        $username=$request['username'];
        $email=$request['email'];
        $password=Hash::make($request['password']);
        $birthdate=$request['birthdate'];
        $fcmtoken=$request['fcmtoken'];
        $city_id=$request['city_id'];
        $role=$request['role'];
        $code=Sms_helper::RandomString();
        $mobile=$request['mobile'];
        $token=str_replace("/","",Hash::make($name.$email));
        $os='web';

        $user=User::admin_user_update($id,$name,$username,$email,$password,$birthdate,$fcmtoken,$os,$city_id,$code,$mobile,$token);
          // Sms_helper::send_sms($user->mobile,$user->code); 
         // Auth::loginUsingId($user->id);
         return redirect('/admin/user/index'); 

       
    }

    public function admin_delete(Request $request)
    {
      $id=$request['id'];
      User::user_delete($id);
        return redirect('/admin/user/index'); 
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
        if ($user->active=='1') {
          # code...
        
        if($user->is_admin())
        {
          return redirect('/admin');
        }
     else if ($user->is_company()) {
      return redirect('/company');
     } 
     else
      {return redirect('/');}
    }
          return redirect()->intended('/user/active/'.$user->id)->withErrors(['the user is not active ']);
      }
      return redirect()->intended('/login')->withErrors(['the Email or Password wrong']);
  }



  public function login_api(Request $request)
  {
      $validator = $this->validator_login($request->input());
         if ($validator->fails()) {
           return response()->json(['status' => False, 'data' => '', 'message' => $validator->errors()->all(),'type'=>'error']);

        }

    $email=$request['email'];
    $password=$request['password'];
      //$credentials = $request->only('email', 'password');

      if (Auth::attempt(['email' => $email, 'password' => $password])) {
          // Authentication passed...
        $user= User::where('email',$request->email)->first();
    return response()->json(['status' => True, 'data' => $user, 'message' => '','type'=>'array']);
      }

      return response()->json(['status' => false, 'data' =>'', 'message' => 'The username or password are wronng','type'=>'error']);


}


public function active(Request $request)
{
  $user_id=$request['id'];
  $code=$request['code'];
  $user=User::user_show($user_id);
  if ($user!=null) {
    # code...

  if ($user->code==$code) {
        User::user_active($user_id);
          return redirect('/');
  }
  return redirect()->intended('/user/active/'.$user_id)->withErrors(['The code you entered is wrong please try again']);
    }

      return redirect()->intended('/login')->withErrors(['the user is not exist']);
}


public function active_api(Request $request)
{
  $user_id=$request['id'];
  $code=$request['code'];
  $user=User::user_show($user_id);
  if ($user!=null) {
    # code...

  if ($user->code==$code) {
        User::user_active($user_id);
        return response()->json(['status' => true, 'data' =>$user, 'message' => 'The user has been activated','type'=>'error']);

  }
  return response()->json(['status' => false, 'data' =>'', 'message' => 'The code you entered is wrong please try again','type'=>'error']);
    }

     return response()->json(['status' => false, 'data' =>'', 'message' => 'The User is not exist','type'=>'error']);
}

public function company_portal()
{
  $company_id=Auth::user()->id;
  $portals=Portal::portal_by_company($company_id);
  return view('company.portal_index',compact('portals'));
}


public function active_view(Request $request)
{

  $id=$request['id'];
  $user=User::user_show($id);
  return view('auth.active',compact('user'));
}
}

