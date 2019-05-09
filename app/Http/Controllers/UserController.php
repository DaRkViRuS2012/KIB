<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


public function RandomString()
{
       $code=strval(rand(100000,999999));
    return $code;
}

    public static function send_sms($message,$mobile,$lang) {
 $user_controller=new UserController;
    $otp=$user_controller->RandomString();
    var_dump($otp);
      $message = 'Your activation code is: ' . $otp;
      // $_url='https://bms.syriatel.sy/API.asmx?wsdl?user_name=IETS&password=P@123456&msg='.$message.'&sender='.'KIB'.'&to=963'.$mobile;
      $_url='https://bms.syriatel.sy/API/SendSMS.aspx?user_name=IETS&password=P@123456&msg='.$message.'&sender=KIB&to=963'.$mobile;
      // var_dump($_url);
      $_url = preg_replace("/ /", "%20", $_url);
      $result = file_get_contents($_url);
       // var_dump($result,"<br>");
      return $result;
  }


      public static function send_sms_post(Request $request) {
        $user_controller=new UserController;
        echo($user_controller->send_sms($request['message'], $request['mobile'], $request['lang']));
    }

}

